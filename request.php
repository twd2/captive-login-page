<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/function.php';

if (!isset($_GET['id'])) die('Missing parameter');
$index = $_GET['id'];

if (!isset($passwords[$index])) die('Invalid parameter');
$pass = $passwords[$index];

if (!isset($profiles[$pass['profile']])) die('Invalid configuration');
$profile = $profiles[$pass['profile']];

connect($pass, $profile);
if (isConnectionAlive()) {
  die('ok');
} else {
  die('Authtication failed');
}
