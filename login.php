<?php
define('LOGIN_MAIL', getenv('LOGIN_MAIL'));
define('LOGIN_PASSWORD', getenv('LOGIN_PASSWORD'));

// ログインページ
$url = 'https://paiza.jp/sign_in';
$cookiePath = './cookie.txt';

try {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiePath);

  $htmlEl = curl_exec($ch);
  curl_close($ch);
  echo '接続に成功しました';
} catch (Exception $e) {
  $e->getMessage();
}
