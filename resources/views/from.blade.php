<form method="post" action="/insertUser">
    @csrf

    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>

    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <br>

    <button type="submit">Login</button>
</form>