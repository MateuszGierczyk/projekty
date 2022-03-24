<?php

foreach($_POST as $key => $value){
    //echo "$value"."<br>";

if(empty($value)){
    //echo $key."<br>";
    echo "<script> history.back(); </script>";
    exit(); 
}
}
    echo <<< DATA
    Company: $_POST[company]<br>
    First Name: $_POST[f_name]<br>
    Last Name: $_POST[l_name]<br>
    Email: $_POST[email]<br>
    Title: $_POST[title]<br>
    Phone: $_POST[phone]<br>
    Date: $_POST[date]<br>
    Job: $_POST[job]<br>
    Dietary Requirements: $_POST[diet]<br>
    Expectations: $_POST[exp]<br>
DATA;
?>