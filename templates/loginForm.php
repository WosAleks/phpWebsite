<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<form
    action="/index.php?action=processLogin"
    method="post"
>

    <p>
        Username:
        <input type="text" name="username" autofocus>
    </p>

    <p>
        Password:
        <input type="password" name="password">
    </p>

    <input type="submit" value="Login" id="submit">

    <button><a href="index.php?action=showNewUserForm" class="createUser">Create new account</a></button>


</form>

<?php
require_once __DIR__ . '/../templates/_footer.php';
?>