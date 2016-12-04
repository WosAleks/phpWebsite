<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<h1>Create a new item</h1>

<form
    action="index.php?action=createNewItem"
    method="POST"
>

    <p>
        <label>Item Name:</label>
        <input type="text" name="itemName">
    </p>

    <p>
        <label>Image Source:</label>
        <input type="text" name="imageSrc">
    </p>

    <p>
        <label>Price:</label>
        <input type="text" name="price">
    </p>

    <p>
        <label>Description:</label>
        <input type="text" name="description">
    </p>

    <p>
        <label>Category:</label>
        <input type="text" name="category">
    </p>

    <input type="submit" value="Create New Item">

</form>

<?php
require_once __DIR__ . '/../templates/_footer.php';
?>
