<table>
    <tr>
        <th>
            login
        <th>
            email
        <th>
            password
    </tr>
    <?php
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user->login;
        echo "<td>" . $user->email;
        echo "<td>" . $user->password;
        echo "</tr>";
    }
    ?>
</table>

<h1>Enter a Login to Delete</h1>
<form action="/delete" method="post">
    @csrf

    @method('DELETE')

    <label>Login</label>
    <input type="text" name="login" require>
    <button>submit</button>
</form>