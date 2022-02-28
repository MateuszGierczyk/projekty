<html>
    <head>
        <title>Dołączanie plików</title>
    </head>
    <body>
        <h3>Początek strony</h3>

        <?php
            require './plik.php';
            require_once './plik.php';

            include './plik.php';
            include_once './plik.php'
        ?>

        <h3>Koniec strony</h3>
    </body>
</html>