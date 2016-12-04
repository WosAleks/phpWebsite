<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<div class ="detail1">
    <h1>Product Details: <?= $item['itemName'] ?></h1>

    <dl>
        <dd><img src="<?= $item['imageSrc'] ?>" width="200" height="200"></dd>
        <dt>Price: <?= $item['price'] ?></dt>
        <dt>Description</dt>
        <dd><?= $item['description'] ?></dd>
        <dt> Category: <?= $item['category'] ?></dt>
    </dl>
</div>


<?php
require_once __DIR__ . '/../templates/_footer.php';
?>