
<section>
    <div class="login">
        <?php
        if($isLoggedIn):
            ?>
                <a href="/index.php?action=showShoppingCart">Shopping Cart</a>

            <br>
            You are logged in as: <strong><?= $username ?></strong>

            <img src="<?= $profilePicture[0] ?>" width="100" height="80">

            <br>
            <a href="/index.php?action=logout">Logout</a>

            <?php

        else:

            ?>
            <a href="/index.php?action=login">Login</a>
            <?php

        endif;

        ?>
    </div>
</section>
