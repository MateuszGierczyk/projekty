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
        $connect = new mysqli("localhost", "root", "", "3gi1tg1");
        $sql = "SELECT `name`, `surname` FROM `user`;";
        $result = $connect->query($sql);
        while ($user = $result->fetch_assoc()) {
            //print_r($user);
            echo "Imię i nazwisko: ".$user['name']." ".$user['surname'];
            echo "<br>";
        }
        $connect->close();
    ?>
</body>
</html>