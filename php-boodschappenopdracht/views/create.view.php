<!DOCTYPE html>
<html lang="en">

<?php require('partials/header.php'); ?>

<body>
    <?php require('partials/nav.php');?>
    <form method="post">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" value="<?=$_POST['name'] ?? ''?>" required><span class="error_message"><?=$errors['name'] ?? ''?></span><br>
        <label for="amount">Aantal</label><br>
        <input type="text" id="number" name="number" value="<?=$_POST['number'] ?? ''?>" required><span class="error_message"><?=$errors['number'] ?? ''?></span><br>
        <label for="price">Stukprijs:</label><br>
        <input type="text" id="price" name="price" value="<?=$_POST['price'] ?? ''?>" required><span class="error_message"><?=$errors['price'] ?? ''?></span><br>
        <input type="submit" value="Submit">
    </form>
    <?php require('partials/footer.php');?>
</body>
</html>