<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<form action ="index.php" method="get">

    <div id ="table1">
        <table>
            <tr><th>Item Detail</th><th>Item ID</th><th>Item Name</th><th>Picture</th><th> Price </th><th>Description</th><th> Category </th><th>Update</th><th>Delete</th></tr>

            <?php
            foreach ($items as $item) {
                ?>
                <tr>
                    <td><a href="index.php?action=show&id=<?= $item['itemID'] ?>">
                            DETAIL PAGE</a></td>
                    <td> <?= $item['itemID'] ?> </td>
                    <td> <?= $item['itemName'] ?> </td>
                    <td><img src="<?= $item['imageSrc'] ?>" width="200" height="200">  </td>
                    <td> <?= $item['price'] ?> </td>
                    <td> <?= $item['description'] ?> </td>
                    <td> <?= $item['category'] ?> </td>
                    <td>
                        <a href="index.php?action=showUpdateItemForm&id=<?= $item['itemID'] ?>">UPDATE</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?= $item['itemID'] ?>">DELETE</a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>

    <input type="hidden" name="action" value="showNewItemForm">
    <input type="submit" value="Create New Item">
</form>


<?php
require_once __DIR__ . '/../templates/_footer.php';
?>

</body>
</html>