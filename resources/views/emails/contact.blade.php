@component('mail::message')
    # Introduction

    Nombre: {{ $contact->nombre }}
    Email: {{ $contact->email }}
    Subject: {{ $contact->subject }}
    Message: {{ $contact->msg }}

    @component('mail::button', ['url' => ''])
        wii
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
