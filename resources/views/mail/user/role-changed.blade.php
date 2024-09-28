<x-mail::message>
Hello {{ $user->name }},
@if ($user->is_admin)
You are now an administrator. You can add or block users.
@else
You no longer have administrative rights. You can no longer add or block users.
@endif
<br>
Thank you, <br>
{{ config('app.name') }}
</x-mail::message>
