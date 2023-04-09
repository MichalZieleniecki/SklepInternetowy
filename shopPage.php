<?php

require_once"systemClass.php";
require_once"layoutClass.php";
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

    <div class="shop__container">
        <aside class="shop__menu">
            <ul>
                <li>Category 1</li>
                <ul>
                    <li>SubCategory</li>
                    <li>SubCategory</li>
                    <li>SubCategory</li>
                </ul>
                <li>Category 2</li>
                <ul>
                    <li>SubCategory</li>
                    <li>SubCategory</li>
                    <li>SubCategory</li>
                </ul>
            </ul>
        </aside>
        <?php LayoutClass::getProducts(); ?>
    </div>

    <?php

    LayoutClass::printFooter();
    
    ?>

</body>
</html>