<?php

class LayoutClass {
    static function printHeader() {
        $conditionReander = "";
        if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
            $conditionReander = "
                <li>
                    <a href='logout.php'>Log Out</a>
                </li>
            ";
        } else {
            $conditionReander = "
                <li><a href='signInPage.php'>Sign In</a></li>
                <li><a href='signUpPage.php'>Sign Up</a></li>
            ";
        }

        echo "
        <header>
            <div class='header__container'>
                <h4><a href='index.php'>SKLEP</a></h4>
                <nav>
                    <ul>
                        $conditionReander
                    </ul>
                </nav>   
            </div>
        </header>
        ";
    }

    static function printFooter() {
        echo '
            <footer>
                <div class="footer__container">
                    <div class="footer__container--column">
                        <h4>Footer</h4>
                        <ul>
                            <li>Michał Zieleniecki &copy 2023</li>
                        </ul>
                    </div>
                </div>
            </footer>
        ';
    }

    public static function printTitle($row) {
            $img = $row['Img'];
            $name = $row['Name'];
            $price = $row['Price'];
            $id = $row['Id'];

            echo "
                <a href='productPage.php?product_id=$id'>
                    <div class='product__title'>
                        <img src='$img' alt='img' />
                        <h3>$name</h3>
                        <p>$price PLN</p>
                    </div>
                </a>
            ";
    }

    public static function getProducts() {
        $connection = SystemClass::dbConnect();

        $sql = "SELECT * FROM  product";

        echo "
            <section class='shop__products'>
        ";

        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            LayoutClass::printTitle($row);
        }

        echo "
            </section>
        ";

        $connection -> close();
    }

    public static function showProduct() {
        $connection = SystemClass::dbConnect();

        $product_id = $_REQUEST['product_id'];
        $sql = "SELECT * FROM product WHERE id=$product_id";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);

        $img = $row['Img'];
        $name = $row['Name'];
        $desc = $row['Desc'];
        $price = $row['Price'];

        echo "
            <section class='product__container'>
                <img src='$img' alt='img' />
                <div class='product__content'>
                    <h2>$name</h2>
                    <p>$desc</p>
                    <p>$price</p>
                    <button type='button'>Dodaj do koszyka</button>
                </div>
            </section>
        ";

    }
}
