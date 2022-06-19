<h2>Confirmation de votre rendez-vous</h2>

<p>
    {{ $appointment->name }} votre rendez-vous du {{ $appointment->appointment }} est confirmé.
</p>

<h3>Vos coordonnées</h3>

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

<a href="{{ route('appointment.show', $appointment) }}">Voir mon rendez-vous</a>
