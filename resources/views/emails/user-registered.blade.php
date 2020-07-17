@component('mail::message')
# Selamat Datang di Taman Kreasi 

Semoga website ini dapat bermanfaat khususnya bagi pengembang serta bagi sahabat-sahabat.

@component('mail::button', ['url' => ''])
Masuk
@endcomponent

Thanks,<br>
Kodir Zaelani<br>
{{ config('app.name') }}
@endcomponent
