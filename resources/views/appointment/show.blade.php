<h3>Rendez vous pour {{ $appointment->name }}</h3>

<p>Rendez vous le {{ $appointment->appointment }}</p>

<h4>Donnée de contact</h4>

@if ($appointment->phone)
    <div>
        Téléphone: {{ $appointment->phone }}
    </div>
@endif
    <div>
        Email: {{ $appointment->email }}
    </div>

@if ($appointment->message)
    <h4>Message</h4>
    <p>{{ $appointment->message }}</p>
@endif

<a href="{{ route('appointment.index') }}">Retour</a>
