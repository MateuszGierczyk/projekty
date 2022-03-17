<?php
    $text = <<< SCHOOL
        ZSL - Zespół
        Szkół
        Łączności<br>
SCHOOL;
    echo $text;
    echo nl2br($text);
    $name = "jANuSz";

    echo strtolower($name)."<br>";
    echo strtoupper($name)."<br>";

    $data = "jaNusZ kOWalski";
    echo ucfirst($data)."<br>";
    echo ucwords($data)."<br>";

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit facilis quidem aspernatur voluptas tenetur explicabo ad eaque ut sed sint assumenda, quo placeat, consequatur quia soluta quam ea at ipsa!<br>";

    echo $lorem;
    echo wordwrap($lorem, 20, "<br>");
    echo wordwrap($lorem, 20, "<hr>");

    // ob_clean();

    //usuwanie białych znaków

    $name = "Anna";
    $name2 = "  Łukasz  ";
    echo "Ilość znaków \$name: ". strlen($name). "<br>";
    echo "Ilość znaków \$name2: ". strlen($name2). "<br>";

    echo strlen(ltrim($name2))."<br>";
    echo mb_strlen(rtrim($name2))."<br>";
    echo mb_strlen(trim($name2))."<br>";

    //przeszukiwanie ciągów znaków

    echo strstr("janusz@wp.pl", "@")."<br>";
    echo strstr("janusz@wp.pl", "w")."<br>";
    echo stristr("janusz@wp.pl", "W")."<br>";

    echo strpos("janusz@wp.pl", "a")."<br>";

    $name = "Janusz";
    echo substr($name, 3)."<br>";
    echo substr($name, 3, 2)."<br>";

    $domena = "janusz@gmail.com";
    echo substr(strstr($domena, "@"), 1)."<br>";

    echo str_replace("t","*_____*", "string")."<br>";

?>