<?php
require './vendor/autoload.php';

use CowSay\Cow;

$noiraude = new Cow('Allo Docteur, c\'est la noiraude !');
$noiraude->setTongue('U');
$noiraude->say();
echo $noiraude;
