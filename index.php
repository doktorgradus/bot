<?php
require __DIR__ . '/vendor/autoload.php';
/////////////////////////////////////
 require 'core/functions.php';     //
 require 'core/settings.php';      //
 require 'core/answers.php';       //
 //require 'core/catch.php';       //
/////////////////////////////////////



        if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(kick [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	sendMessage($chat_id,"Кикаем юзера {$message[1]}",$msgid);
	kickChatMember($chat_id,$message[1]);
        	}
}
//catch non vip users who spam stickers.
if(in_array($user_id_group, $vip_users)){
	 if ($sticker) {
	sendMessage($chat_id,"ID сообщения: ".$msgid. " Имя пользователя : ".$user_first_name_group.$first_name." ID пользователя: ".$user_id_group." Никнейм: ".$username.$user_name_group." Время: ".date('H:i:s',time())." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
	//kickChatMember($chat_id,$user_id);
}
}
echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>';
$config = new PhpHelperBot\Config(include 'config.php');
echo $config->token;
?>