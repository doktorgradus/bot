<?php
$vips = R::getCol('SELECT user_name FROM viplist');
if(!in_array($username2, $vips)){
	 if ($sticker) {
	sendMessage($chat_id,"ID сообщения: ".$msgid. " Имя пользователя : ".$user_first_name_group.$first_name." ID пользователя: ".$user_id_group." Никнейм: ".$username.$user_name_group." Время: ".date('H:i:s',time())." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
	//kickChatMember($chat_id,$user_id);
}
}
?>
