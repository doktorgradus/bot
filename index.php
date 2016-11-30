<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




require 'core/functions.php';               
require 'core/settings.php';
require 'libs/db.php';	
$ban = R::findOne('banlist',' user_name = ? ',[$username2]);
if ($ban) {
 sendMessage($chat_id,"<b>{$username2}</b> Ты забанен админом $ban->banned_by с причиной $ban->reason в $ban->date_add твой бан истекает $ban->date_unban");
    }else{
require 'core/commands/vip/loader.php';                
require 'core/answers.php';
    }	                
                 
 //require 'core/catch.php';  				


echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/bot/web">Web form</a>';
?>