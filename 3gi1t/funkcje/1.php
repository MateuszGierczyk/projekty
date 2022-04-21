<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figury geometryczne</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="geometricFigure" value="cube" checked>Sześcian<br><br>
        <input type="radio" name="geometricFigure" value="rectangle">Prostokąt<br><br>
        <input type="submit" value="Zatwierdź">
    </form>

    <?php
        if (isset($_POST['geometricFigure'])){
            echo '<h3>Oblicz pole</h3><form action="./scripts/calculate.php" method="post">';
                switch ($_POST['geometricFigure']) {
                    case 'cube':
                        echo '<br>';
                        echo '<input type="hidden" name="geometricFigure" value="cube">';
                        echo '<div class="range"><input type="range" name="a" min="0" max="1000"></div><div class="value">100</div>';
                        break;
                    case 'rectangle':
                        echo '<br>';
                        echo '<input type="hidden" name="geometricFigure" value="rectangle">';
                        echo '<input type="text" name="a" placeholder="Podaj a">';
                        echo '<input type="text" name="b" placeholder="Podaj b">';
                        break;
                    default:
                        # code...
                        break;
                }
            echo '<input type="submit" value="Oblicz">';
            echo ' </form>';
        }
    ?>
    <script>
        const slider = document.querySelector("input");
        const value = document.querySelector("value");
        value.textContent = slider.value;
    </script>
</body>
</html>