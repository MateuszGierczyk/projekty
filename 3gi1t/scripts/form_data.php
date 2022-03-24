<?php
    //print_r($_POST);
    //echo "Dane pobrane z formularza<br>";
    //echo $_POST['name']." ";
    //echo $_POST['pass']."<br>";

    if(!isset($_POST['terms'])){
        echo "<script> history.back(); </script>";
        exit();
    }
    foreach($_POST as $key => $value){
        //echo "$value"."<br>";

    if(empty($value)){
        //echo $key."<br>";
        echo "<script> history.back(); </script>";
        exit(); 
    }
    }

    echo "Dane użytkownika:<br>";
    switch ($_POST['city']) {
        case 'poz':
            $city = "Poznań";
            break;

        case 'gn':
            $city = "Gniezno";
            break;
        default:
            $city = "Anonymous";
            break;
    }
    echo <<< DATA
     Imię: $_POST[name]<br>
     Hasło: $_POST[pass]<br>
     Miasto: $city <br>
     Płeć: $_POST[gender]
DATA;
?>