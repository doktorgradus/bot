<?php
$vips = R::getCol('SELECT user_name FROM viplist WHERE role=2');
if(in_array($username2, $vips)){
        	if (preg_match_all("/(?<![\w\d])(addvip [A-Za-z]+[A-Za-z0-9_]+)(?![\w\d])/uim",$message_preg, $mathes)) {
    $message = explode(" ", $message);
    $alreadyvip = R::findOne('viplist',' user_name = ? ',[$message[1]]);
if (!$alreadyvip) {
		    $vip = R::findOne('newuser',' username = ? ',[$message[1]]);
if ($vip) {
	$viplist = R::dispense('viplist');
	$viplist->user_name = $vip->username;
	$viplist->first_name = $vip->first_name;
	$viplist->user_id = $vip->user_id;
	$viplist->role = $message[2];
	$viplist->date_add = date('Y-m-d H:i:s');
	$viplist->add_by = $username2;
	$id = R::store($viplist);
	if ($id) {
	sendMessage($chat_id,"ID пользователя: $vip->user_id Записали в viplist пользователя <b>{$message[1]}</b>  дату [".date('Y-m-d H:i:s')."] роль <b>{$message[2]}</b> \n Добавил админ - <b>{$username2}</b> \n Посмотреть - виплист",$msgid,$replyMarkup);
}
}
}	
}
}
?>