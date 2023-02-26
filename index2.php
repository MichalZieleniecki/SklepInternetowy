<?php
require_once"SystemClass.php";
require_once"LayoutClass.php";
session_start();
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
        
    </section>

    <?php
    LayoutClass::printFooter();
    ?>

</body>
</html>