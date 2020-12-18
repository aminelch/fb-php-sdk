<?php

//load the composer autoload file

use App\MaClasse;
use Noodlehaus\Config;
use Noodlehaus\ConfigInterface;
use Noodlehaus\Writer\WriterInterface;

require '../vendor/autoload.php';

$maClasse = new MaClasse();



$conf = Config::load("../config/app.json");

// $debug = $conf->get('fb_app_id');

// dump($debug);

// $writer= WriterInterface();
dump($conf->getsupportedParsers);

// wlh glegt -_-

echo "<h2>".$maClasse->sayHello() ." </h2>";