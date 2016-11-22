<?php
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
<<<<<<< HEAD
=======
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
>>>>>>> parent of 67c69a7... initial db
echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>';
?>