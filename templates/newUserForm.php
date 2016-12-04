<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<h1>Create a new account</h1>

<form
    action="index.php?action=createNewUser"
    method="POST"
>
    <p>
        <label>Username:</label>
        <input type="text" name="userName">
    </p>

    <p>
        <label>Password:</label>
        <input type="password" name="password">
    </p>

    <p>
        <label>Profile Picture:</label>
        <input type="text" name="image">
    </p>

    <input type="submit" value="Create New Account">
</form>

<?php
require_once __DIR__ . '/../templates/_footer.php';
?>
