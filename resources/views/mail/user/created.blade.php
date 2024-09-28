<x-mail::message>
Hello {{ $user->name }},
Your account has been successfully created.
**Here are your login details:** <br>
Email: {{ $user->email }} <br>
Password: {{ $password }}
Please log in to the system and change your password.
<x-mail::button url="{{ route('login') }}">
Click here to log in
</x-mail::button>
Thank you <br>
{{ config('app.name') }}
</x-mail::message>
