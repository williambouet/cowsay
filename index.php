<?php

require_once __DIR__ . '/vendor/autoload.php';
use CowSay\Cow;


$bessie = new Cow('Hello, Wilder! Sorry, I poo');
$bessie->setTongue('U');
$bessie->setEyes('^');
$bessie->setPoop('oOo');
$bessie->setUdder('W');
echo $bessie;
