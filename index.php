<?php
////////////////////////////////////
 require 'core/functions.php';     //
 require 'core/settings.php';      //
 require 'core/answers.php';       //
 //require 'core/catch.php';         //
////////////////////////////////////





// if ($user_name_group == 'Denormalization') {
	 if ($sticker) {
	sendMessage($chat_id,"ID сообщения: ".$msgid. " Имя пользователя : ".$user_first_name_group.$first_name." ID пользователя: ".$user_id_group." Никнейм: ".$username.$user_name_group." Время: ".date('H:i:s',time())." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
}

echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>'
?>
