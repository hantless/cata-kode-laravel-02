@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('appointment.store') }}" method="post">
    @csrf
    <label for="name">Nom</label>
    <input type="text" name="name" value="{{ old('name', '') }}" required />

    <label for="phone">Téléphone</label>
    <input type="text" name="phone" value="{{ old('phone', '') }}" />

    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email', '') }}" required />

    <label for="appointment">Date du rendez-vous</label>
    <input type="datetime-local" name="appointment" value="{{ old('appointment') }}" required />

    <label for="message">Message</label>
    <textarea name="message" cols="50" rows="5">
        {{ old('message', '') }}
    </textarea>

    <input type="submit" value="Envoyer" />
</form>

