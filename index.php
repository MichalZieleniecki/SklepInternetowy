<?php
require_once"SystemClass.php";
require_once"LayoutClass.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php
SystemClass::printHead("./styles/main.css");
?>
<body>
    <?php
    LayoutClass::printHeader();
    ?>

    <section class='hero'>
        <div class='hero__container'>
            <h1>Sklep Internetowy</h1>
            <p>Sklep</p>
            <button type='button'>
                <a>Sklep Internetowy</a>
        </div>
    </section>

    <?php
    LayoutClass::printFooter();
    ?>

</body>
</html>
