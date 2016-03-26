<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/function.php';

if (!NO_PROBE && isConnectionAlive()) {
  die('<HTML><HEAD><TITLE>Success</TITLE></HEAD><BODY>Success</BODY></HTML>');
} else {
  http_response_code(302);
  header_remove('Content-Type');
  header('HTTP/1.1 302 Moved Temporarily');
  header('Location: http://www.apple.com/');
  die();
}
