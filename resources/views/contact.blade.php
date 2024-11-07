<form action="/contact" method="POST">
    @csrf
    <label for="name">Név:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Üzenet:</label>
    <textarea name="message" id="message" required></textarea>

    <button type="submit">Küldés</button>
</form>