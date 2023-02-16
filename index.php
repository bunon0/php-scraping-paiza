<?php
require_once(__DIR__ . '/vendor/autoload.php');

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;



function getUrlContent()
{
  $url = 'https://web-kanji.com/';
  $dom = new Dom();
  $options = new Options();
  $options->setEnforceEncoding('utf8');

  $dom->loadFromUrl($url, $options);

  sleep(1);


  return $dom;
}


$test = getUrlContent();

'<pre>';
var_dump($test);
'</pre>';


?>

<!-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPスクレイピング</title>
</head>

<body>

</body>

</html> -->