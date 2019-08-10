@component('mail::message')
# Welcome to freeCodeGram

This is a community of fellow developers and we love you have joined us.

@component('mail::button', ['url' => 'http://www.9gag.com'])
Have Fun
@endcomponent

All the best,<br>
{{ config('app.name') }}
@endcomponent
