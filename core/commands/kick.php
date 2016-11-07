<?php
if ($message) {
	sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(",", $message);
	sendMessage($chat_id,"Кикаем юзера {$message[1]}",$msgid);
	
}