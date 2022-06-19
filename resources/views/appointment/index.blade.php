@if (session('status'))
    <div class="alert alert-{{ session('status.type') }}">
        {{ session('status.message') }}
        <div>
            <a href="{{ route('appointment.show', session('status.appointment')) }}">
                Consulter votre demande de rendez-vous
            </a>
        </div>
    </div>
@endif

<ul>
    <li><a href="{{ route('appointment.create') }}">Nouveau rendez-vous</a></li>
</ul>
