<?php

class LayoutClass {
    static function printHeader() {
        $conditionReander = "";
        if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
            $conditionReander = "
                <li>
                    <a href='logout.php'>Wyloguj</a>
                </li>
            ";
        } else {
            $conditionReander = "
                <li><a href='signInPage.php>Zaloguj się</a></li>
                <li><a href='signUpPage.php>Zarejestruj się</a></li>
            ";
        }

        echo "
        <header>
            <div class='header__container'>
                <h4>SKLEP</h4>
                <nav>
                    <ul>
                        <li><a>Home</a></li>
                        <li><a>About us</a></li>
                        <li><a>Contact</a></li>
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
                        <h4></h4>
                        <ul>
                            <li>sdsdsd</li>
                            <li>sdsdsd</li>
                        </ul>
                        <ul>
                            <li>sdsdsd</li>
                            <li>sdsdsd</li>
                        </ul>
                        <ul>
                            <li>sdsdsd</li>
                            <li>sdsdsd</li>
                        </ul>
                    </div>
                </div>
            </footer>
        ';
    }
}
