<?php
require_once __DIR__ . '/../templates/_header.php';
?>
<hr>
<h3>Shopping Cart</h3>
<table>
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub-total</th>
        <th>Remove</th>
    </tr>
    <?php
    //-----------------------------
    $total = 0;

    foreach($shoppingCart as $id=>$quantity):
        $connection = connect_to_db();

        $product = get_one_item($connection, $id);
        $price = $product['price'];
        $subTotal = $price * $quantity;
        $total += $subTotal;
//-----------------------------
        ?>
        <tr>
            <td><?= $product['itemName'] ?></td>
            <td>&euro; <?= $price ?></td>
            <td><?= $quantity ?></td>
            <td><?= $subTotal ?></td>
            <td><a href="/index.php?action=removeFromCart&id=<?= $product[0] ?>">(remove from cart)</a></td>

        </tr>

        <?php
//-----------------------------
    endforeach;
    //-----------------------------
    ?>

    <tr>
        <td colspan="3">Total</td>
        <td>&euro; <?= $total ?></td>
    </tr>

</table>
<?php
require_once __DIR__ . '/../templates/_footer.php';
?>