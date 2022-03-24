<?php

if(isset($_POST['terms'])){
    exit();
}
if(empty($_POST['company'])){
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['f_name'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['l_name'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['email'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['title'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['phone'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['job'])) {
    echo "<script> history.back(); </script>";
    exit(); 
}
else if(empty($_POST['date'])) {
    echo "<script> history.back(); </script>";
    exit(); 
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