<?php
  $connect = new mysqli('localhost', 'root','','3gi1t');

  $sql = "SELECT * FROM `user`";
  $result = $connect->query($sql);
  $cssFile = "style.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";
  echo <<<TABLE
  <table>
    <tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data utworzenia użytkownika</th>
    </tr>
TABLE;
  while ($user = $result->fetch_assoc()) {
    echo <<<USER
    <tr>
      <td>$user[name]</td>
      <td>$user[surname]</td>
      <td>$user[created_user]</td>
    </tr>
  USER;

    echo $user['name'], ' ', $user['surname'], ' ', $user['created_user'], '<br>';
  }
  echo '</table>'
?>
