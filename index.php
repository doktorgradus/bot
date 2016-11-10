<?php
//////////////////////////////////////////////
//require __DIR__ . '/vendor/autoload.php'; //
require 'core/functions.php';               //
require 'core/settings.php';                //
require 'core/answers.php';                 //
 //require 'core/catch.php';                //
require 'core/commands/vip/loader.php';     //
//////////////////////////////////////////////
if (!defined('SETTINGS')) die('Не загрузился файл настроек.');
if (!defined('ANSWERS')) die('ANSWERS.PHP not include');
if (!defined('FUNCTIONS')) die('FUNCTIONS.PHP not include');
echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>';
?>