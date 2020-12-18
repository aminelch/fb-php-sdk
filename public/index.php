<?php

//load the composer autoload file

use App\MaClasse;

require '../vendor/autoload.php';

$maClasse = new MaClasse();

dump($maClasse);


echo "<h2>".$maClasse->sayHello() ." </h2>";