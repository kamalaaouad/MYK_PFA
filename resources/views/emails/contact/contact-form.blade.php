@component('mail::message')
    # Bonsoir
    vous avez reçu le part de {{$data['name']}} ({{$data['email']}})

    message::
    {{$data['message']}}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
