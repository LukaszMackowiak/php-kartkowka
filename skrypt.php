<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Serwer PHP</title>
 </head>
 <body>

 <p>

 <?php

$panstwo = $_REQUEST['panstwo'];
$transport = $_REQUEST['transport'];
$czas = $_REQUEST['czas'];
$email = $_REQUEST['email'];

if ($czas > 21) {
    echo "Niestety, Twoje zapytanie nie spełnia warunków udziału w naszym programie";
} else {
    echo "Dziękujemy za zapisanie się do naszej usługi. Informacje zostaną wysłane na podany adres email";
}

 ?>

</p>

 </body>
</html>