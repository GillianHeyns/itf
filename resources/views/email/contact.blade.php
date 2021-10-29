@component('mail::message')
    <body>
    <h1>Beste {{ $request->name }},</h1>
    <p>Bedankt voor jouw bericht.<br>
        Wij contacteren u zo snel mogelijk.</p>
    <hr>
    <p>
        <b>Jouw naam:</b> {{ $request->name }}<br>
        <b>Jouw email:</b> {{ $request->email }}<br>
        <b>Jouw opleiding:</b> {{ $request->keuze }}
    </p>
    <p>
        <b>Jouw bericht:</b><br>{!! nl2br($request->message) !!}
    </p>
    Bedankt,<br>
    {{ env('APP_NAME') }}
    </body>
@endcomponent
