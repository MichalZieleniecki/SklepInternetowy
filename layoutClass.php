<?php

class LayoutClass {
    static function printHeader() {
        $conditionReander = "";
        if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
            $conditionReander = "
                <li>
                    <a href='logout.php'>Wyloguj się</a>
                </li>
            ";
        } else {
            $conditionReander = "
                <li><a href='signInPage.php'>Zaloguj się</a></li>
                <li><a href='signUpPage.php'>Zarejestruj się</a></li>
            ";
        }

        echo "
        <header>
            <div class='header__container'>
                <h4>SKLEP</h4>
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
}
