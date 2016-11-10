<?php
if(!in_array($user_id_group, $vip_users)){
	 if ($sticker) {
	sendMessage($chat_id,"ID сообщения: ".$msgid. " Имя пользователя : ".$user_first_name_group.$first_name." ID пользователя: ".$user_id_group." Никнейм: ".$username.$user_name_group." Время: ".date('H:i:s',time())." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
	//kickChatMember($chat_id,$user_id);
}
}
?>
