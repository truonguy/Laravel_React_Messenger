<x-mail::message>
Hello {{ $user->name }},
@if ($user->blocked_at)
Your account has been suspended. You can no longer log in.
@else
Your account has been activated. You can use our services normally.
<x-mail::button url="{{ route('login') }}">
Click here to log in
</x-mail::button>
@endif
Thank you, <br>
{{ config('app.name') }}
</x-mail::message>
