<?php
require_once"systemClass.php";
require_once"layoutClass.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        SystemClass::printHead("./styles/main.css");
    ?>
</head>
<body>
    <?php
        LayoutClass::printHeader();
        LayoutClass::showProduct();
        LayoutClass::printFooter();
    ?>
</body>
</html>