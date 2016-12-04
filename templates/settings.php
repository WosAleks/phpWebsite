<?php
require_once __DIR__.'/../templates/_header.php';
?>

<div id="paragraph">
    <h1>Settings</h1>

    <form
        action="index.php?action=updatePicture"
        method="POST"
    >
        <img src="<?= $profilePicture[0] ?>" width="100" height="80">

        <p>
            <label>Change Picture:</label>
            <input type="text" name="imageSrc">
        </p>

        <input type="submit" value="Change Picture">

<h3>Change Background Colour</h3>
        <button>
            <a href="/index.php?action=setBackgroundColorBlue" class="createUser">Blue</a>
        </button>

        <button>
            <a href="/index.php?action=setBackgroundColorBlack" class="createUser">Black</a>
        </button>


    </form>
</div>



<?php
require_once __DIR__ . '/../templates/_footer.php';
?>


</body>
</html>