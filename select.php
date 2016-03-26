<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/function.php';

$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader);
echo $twig->render('template.twig', [
  'profiles' => $profiles,
  'passwords' => $passwords
]);
