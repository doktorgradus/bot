<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////////
//require __DIR__ . '/vendor/autoload.php'; //
require 'core/functions.php';               //
require 'core/settings.php';                //
require 'core/answers.php';                 //
 //require 'core/catch.php';  				//
require 'libs/db.php';		                //
require 'core/commands/vip/loader.php';     //
//////////////////////////////////////////////
// if(!in_array($user_id_group, $vip_users)){
// 	 if ($photo) {
// 	sendMessage($chat_id,"Слы нахуй иди",$msgid);
// 	//kickChatMember($chat_id,$user_id);
// }
// }

echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/bot/web">Web form</a>';
?>