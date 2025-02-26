<!DOCTYPE html>
<html lang="en">

<?php require('partials/header.php'); ?>

<body>
    <?php require('partials/nav.php');?>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key=>$product) : ?>
                <tr>
                    <td class="productName"><?=htmlspecialchars($product["name"]); ?></td>
                    <td class="productPrice"><?=htmlspecialchars($product["price"]); ?></td>
                    <td class="productQuantity" type="number"><?=htmlspecialchars($product["number"]); ?></td>
                    <td class="productSubtotal"><?=htmlspecialchars($subtotalPrice[$key]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Totaal</strong></td>
                <td id="totalCost"><?=$totalPrice?></td>
            </tr>
        </tfoot>
    </table>
    <?php require('partials/footer.php');?>
</body>

</html>