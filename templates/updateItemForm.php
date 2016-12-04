<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<form
    action="index.php?action=updateItem"
    method="POST"
>

    <input type="hidden" name="itemID" value="<?= $item['itemID'] ?>">

    <p>
        <label>Item Name:</label>
        <input type="text" name="itemName" value="<?= $item['itemName'] ?>">
    </p>

    <p>
        <label>Image Source:</label>
        <input type="text" name="imageSrc" value="<?= $item['imageSrc'] ?>">
    </p>

    <p>
        <label>Price:</label>
        <input type="text" name="price" value="<?= $item['price'] ?>">
    </p>

    <p>
        <label>Description:</label>
        <input type="text" name="description" value="<?= $item['description'] ?>">
    </p>

    <p>
        <label>Category:</label>
        <input type="text" name="category" value="<?= $item['category'] ?>">
    </p>

    <input type="submit" value="Update Item">
</form>
<?php
require_once __DIR__ . '/../templates/_footer.php';
?>