<form action="{{ route('appointment.store') }}" method="post">
    @csrf
    <label for="name">Nom</label>
    <input type="text" name="name" required />

    <label for="phone">Téléphone</label>
    <input type="text" name="phone" />

    <label for="email">Email</label>
    <input type="email" name="email" required />

    <label for="appointment">Date du rendez-vous</label>
    <input type="datetime-local" name="appointment" required />

    <label for="message">Message</label>
    <textarea name="message" cols="50" rows="5"></textarea>

    <input type="submit" value="Envoyer" />
</form>

