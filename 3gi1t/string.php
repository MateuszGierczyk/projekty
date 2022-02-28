<?php
    $text = <<< TEXT
        ZSL - ZESPOL
        SZKOL
        LACZNOSCI<br><br>
TEXT;
    echo $text;
    echo nl2br($text);

    $name = "MaTeusZ";
    echo $name."<br>";
    echo strtolower($name)."<br>";
    echo strtoupper($name)."<br><br>";

    $text = "paWeL noWAk";
    echo "$text<br>";
    echo ucfirst($text)."<br>";
    echo "$text<br>";
    echo ucwords($text)."<br>";
    echo "$text<br>";

    echo ucfirst(strtolower($text))."<br>";
    echo ucwords(strtolower($text))."<br><hr>";

    $lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Consectetur commodi distinctio nulla laudantium laborum animi unde, dignissimos 
    itaque rerum porro saepe pariatur repudiandae architecto tempore? Sed unde doloremque 
    nobis sapiente!";

    echo $lorem."<br><br>";
    echo wordwrap($lorem, 50, "<br>");

    ob_clean();
?>
