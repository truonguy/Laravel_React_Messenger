<?php
namespace App\Http\Controllers;
use App\Jobs\DeleteGroupJob;
use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
   /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $data = $request->validated();
        $user_ids = $data['user_ids'] ?? [];
        $group = Group::create($data);
        $group->users()->attach(array_unique([$request->user()->id, ...$user_ids]));
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $data = $request->validated();
        $user_ids = $data['user_ids'] ?? [];
        $group->update($data);
        $group->users()->detach();
        $group->users()->attach(array_unique([$request->user()->id, ...$user_ids]));
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        if ($group->owner_id !== Auth::user()->id) {
            abort(403);
        }
        DeleteGroupJob::dispatch($group)->delay(now()->addSeconds(3));
        return response()->json(['message' => 'The group is scheduled to be deleted and will be done soon.']);
    }
}
