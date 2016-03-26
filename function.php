<?php

const APPLE_PROBE_URL = 'http://captive.apple.com/hotspot-detect.html';

require_once __DIR__.'/vendor/autoload.php';

function isConnectionAlive() {
  $response = \Httpful\Request::get(APPLE_PROBE_URL)
    ->doNotFollowRedirects()
    ->send();
  return ($response->code === 200);
}

function connect($param, $profile) {
  $form = $profile['form'];
  foreach ($form as $key => $value) {
    if (preg_match('/\{(.+)\}/', $value, $matches)) {
      $form[$key] = preg_replace('/\{.+\}/', $param[$matches[1]], $value);
    };
  }
  $response = \Httpful\Request::post($profile['url'], $form, $profile['mime'])
    ->send();
}
