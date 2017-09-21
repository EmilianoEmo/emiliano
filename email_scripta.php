<<?php 

// Dodavanje varijabli
$from"emilianomar@outlook.com";
$email=$_POST['email'];
$name=$_POST['ime'];
$subject="$name, uspesno ja primivme vasata email'adresa!'";
$link='http://www.creativepartners.com/project/thomas-college/';
$mesage ="Pocituvani $name , </<br>
<br>
vi se zablagodaruvame za vleguvanjeto vo nasata e-mail lista!<br>
<br>
Kliknete na linkot i prevzemete ja besplatno knigata koja ja baravte: </br>
</<br>
$link";

// Funkcija strip_tags za mircanje HTML tag </br> i vnesuvanje nova varijabla
$strip =strip_tags($mesage, '</<br>');

echo '<center> . $name .', ja primivme vasata e-mail poruka!</<br>;
</<br>
Prevzemete ja besplatno knigata - BONUS poklon!</br>
</<br>
<a href="' . $link . '"><b>project/thomas-college</<b></a></center';

// Funkcija mail za prakjanje poraki
mail ($email, $subject, $strip, "From:".$from);

// Funkcija file za prakjanje e-mail poraki
$file ="korisnici2".html;
file_put_contents($file, $name, .', ' . $email . ', </<br>' .PHP_EOL, FILE_APPEND)

?>