@component('mail::message')

Dear client,

your item(s) have been added in the system.

@component('mail::button', ['url' => config('app.url'), 'color' => 'blue'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
{{ config('app.name') }}
@endcomponent
