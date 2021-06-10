@component('mail::message')
    # Introduction
    Nombre: {{ $confirmation->nombre }}
    Email: {{ $confirmation->email }}
    Subject: {{ $confirmation->subject }}
    Dia: {{ $confirmation->dia }}
    Hora: {{ $confirmation->hora }}
    Message: {{ $confirmation->msg }}

    @component('mail::button', ['url' => route('confirmar.citas', $confirmation->idCita)])
        Confirmar cita
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
