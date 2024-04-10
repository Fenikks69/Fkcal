<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Create a Fruit</h1>

<form method="POST">
    <label>Fruit name:
        <input name="fruit_name" value="<?= $_POST["fruit_name"] ?? "" ?>"/>
        <?php if (isset($errors["fruit_name"])) { ?>
            <p class="invalid-data"><?= $errors["fruit_name"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label>Calories:
        <input name="calories" value="<?= $_POST["calories"] ?? "" ?>"/>
        <?php if (isset($errors["calories"])) { ?>
            <p class="invalid-data"><?= $errors["calories"] ?></p>
            <?php } ?>
    </label>
    <button>Save</button>
</form>



$page_title = 

<?php require "views/components/footer.php" ?>