<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h4>Dane użytkownika</h4>
    <form action = "./scripts/form_data.php" method = "post">
        <input type = "text" name = "name" placeholder = "Podaj imię"><br>
        <input type = "password" name = "pass" placeholder = "Podaj haslo"><br>
        <select name = "city">
            <option value = "poz">Poznań</option>
            <option value = "gn">Gniezno</option>
        </select>
        <br>
        <input type = "radio" name = "gender" value = "Mężczyzna">Mężczyzna
        <input type = "radio" name = "gender" value = "Kobieta">Kobieta<br>
        <input type = "checkbox" name = "terms">Regulamin<br>
        <input type = "submit" value = "Zatwierdz">
    </form>
</body>
</html>