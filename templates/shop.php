<?php
    require_once __DIR__ . '/../templates/_header.php';
?>
<div id ="table1">
    <table>
        <tr><th>Item Detail</th><th>Item Name</th><th>Picture</th><th> Price </th>
            <?php if ($isLoggedIn) { ?>
            <th>Add to Cart</th>
            <?php } ?>

        </tr>

        <?php
        foreach ($items as $item) {
            ?>
            <tr>
                <td><a href="index.php?action=show&id=<?= $item['itemID'] ?>">
                        DETAILS</a></td>
                <td> <?= $item['itemName'] ?> </td>
                <td><img src="<?= $item['imageSrc'] ?>" width="200" height="200">  </td>
                <td> <?= $item['price'] ?> </td>
                <?php if ($isLoggedIn) { ?>
                <td> <a href="index.php?action=addToCart&id=<?= $item['itemID'] ?>">
                        Add</a> </td>
                <?php } ?>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

<?php
    require_once __DIR__ . '/../templates/_footer.php';
?>

</body>
</html>