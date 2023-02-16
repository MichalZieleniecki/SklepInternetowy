<?php

class SystemClass {
    static function printHead($stylesPath) {
        echo "
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Sklep</title>
            <link rel='stylesheet' href='$stylesPath'
        </head>
        ";
    }
}
