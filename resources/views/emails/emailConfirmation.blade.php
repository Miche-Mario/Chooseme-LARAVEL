
@component('mail::message')
# {{$title}}


@component('mail::panel')

    {!!  $body !!}

@endcomponent






Merci<br>
{{ config('app.name') }}

@endcomponent
