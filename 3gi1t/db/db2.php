<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dane z bazy</title>
</head>
<body>
    <h3>Użytkownicy</h3>
    <?php
        require_once './scripts/connect.php';
        $sql = "SELECT `name`, `surname`, `city`, `color` FROM `user` JOIN `city` ON `user`.`city_id`=`city`.`id` JOIN `color` ON `user`.`color_id`=`color`.`id`";
        $result = $connect->query($sql);
        $count = 1;
        while ($user = $result->fetch_assoc()) {
            //print_r($user);
            echo "Użytkownik nr: $count <br>"."Imię i nazwisko: ".$user['name']." ".$user['surname'];
            $count++;
            echo "<br>Miasto: $user[city]";
            echo "<br>Kolor: $user[color]";
            echo "<hr>";
        }
        $connect->close();
    ?>
</body>
</html>