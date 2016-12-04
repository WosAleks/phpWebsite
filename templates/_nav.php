

<div id="nav">
    <ul style="list-style-type:none">
        <a href ="index.php" class="<?=  $indexLinkClass ?>">Homepage</a>
        <a href ="index.php?action=about" class="<?= $aboutLinkClass ?> ">About Us</a>
        <a href ="index.php?action=shop" class="<?= $shopLinkClass ?> ">Shop</a>
        <a href ="index.php?action=contact" class="<?= $contactLinkClass ?> ">Contact Us</a>
        <a href ="index.php?action=sitemap" class="<?= $sitemapLinkClass ?> ">Site Map</a>

        <?php if($isAdmin) { ?>
            <a href ="index.php?action=adminCrud" class="<?= $crudLinkClass ?> ">Admin CRUD</a>
        <?php }?>

        <?php if ($isLoggedIn){ ?>
            <a href ="index.php?action=settings" class="<?= $settingLinkClass ?> ">Settings</a>
        <?php }?>


    </ul>
</div>