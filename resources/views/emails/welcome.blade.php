@component('mail::message')
# Welcome to Tazerzit

I would like you to join us.

@component('mail::button', ['url' => ''])
click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
