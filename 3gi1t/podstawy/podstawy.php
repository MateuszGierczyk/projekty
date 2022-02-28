<?php
$name = 'Tomasz';
$surname = 'Nowak';

echo "Imię: $name <br>";
echo 'Imię: $name';

echo "<br>Imię: ".$name.", nazwisko: ".$surname."<br>";

echo <<< TEXT
  <br>Imię $name
  , nazwisko: $surname
  <br>
TEXT;

$text = <<< TEXT
  <br>Imię $name
  , nazwisko: $surname
  <br>
TEXT;

echo $text;
echo $text;
echo $text;

echo <<< 'TEXT'
  <br>Imię $name
  , nazwisko: $surname
  <br>
TEXT;

echo "<br>Nazwa zmiennej: \$name<br>";

$dec = 10;
$bin = 0b10;
$oct = 010;
$hex = 0x10;

echo "<br>". $dec. "<br>";
echo $bin. "<br>";
echo $oct. "<br>";
echo $hex. "<br>";

$x = 0b100;
$x = $x << 1;
$x = $x << 2;
$x = $x >> 3;
echo "<br>". $x. "<br>";

$x = 10;
echo "<br>".gettype($x)."<br>";
echo "string <br>";
$x = 10.5;
echo gettype($x)."<br>";
$x = true;
echo gettype($x)."<br>";
echo $x."<br>";
$x = false;
echo $x."<br>";

$x = 10;
echo $x."<br>"; //10
$x = $x++;
echo $x."<br>"; //10
echo ++$x."<br>"; //11
$x = ++$x;
echo ++$x."<br>"; //13
$y = $x++;
echo $x."<br>"; //14
echo $y."<br>"; //13
$y = --$x;
echo $y."<br>"; //13
echo PHP_VERSION."<br>"; //8.0.10

echo 2**10 ."<br>";

$x=1;
$y=1.0;
if ($x == $y) {
  echo "równe <br>";
}
else {
  echo "różne <br>";
}

$x=1;
$y=1.0;
if ($x === $y) {
  echo "identyczne <br>";
}
else {
  echo "nieidentyczne <br>";
}
 ?>
