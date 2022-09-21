<?php

// Controllo sulla mail
$email = trim($_GET['email']);
$atControl = strpos($email, '@');
$pointControl = strpos($email, '.');
$mailRes = ($atControl != false && $pointControl != false) ? true : false;

// Controllo name
$name = trim($_GET['name']);
$nameLen = strlen($name);
$nameRes = ($nameLen > 3) ? true : false;

// Controllo age
$age = $_GET['age'];
$ageRes = is_numeric($age);


?>

<div>
    <?=
    ($mailRes && $ageRes && $nameRes) ? 'Accesso riuscito' : 'Accesso negato';
    ?>
</div>