<?php
if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(kick [a-z]+)(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	 $pages = R::findOne('newuser',' username = ? ',[$message[1]]);
	//sendMessage($chat_id,"Кикаем юзера {$message[1]}",$msgid);
	if ($pages) {
	kickchatmember($chat_id,$pages->user_id);
	$banlist = R::dispense('banlist');
	$banlist->user_name = $pages->username;
	$banlist->user_id = $pages->user_id;
	$banlist->reason = $message[2];
	$banlist->date_add = date('Y-m-d H:i:s');
	$banlist->date_unban = "NULL";
	$banlist->banned_by = $username2;
	$id = R::store($banlist);
			sendMessage($chat_id,"ID пользователя: $pages->user_id Записали в базу юзера <b>{$message[1]}</b>  дату [".date('Y-m-d H:i:s')."] причину <b>{$message[2]}</b> \n Забанен админом - <b>{$username2}</b> \n Посмотреть - банлист",$msgid,$replyMarkup);
	}else{
		//sendMessage($chat_id,"Пользователя нет в базе данных",$msgid,$replyMarkup);
	}
}
}

?>
