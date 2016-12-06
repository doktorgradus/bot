<?php
$vips = R::getAll('SELECT user_name,user_id,role,date_add,add_by FROM viplist');
 if (preg_match_all("/(?<![\w\d])(viplist)(?![\w\d])/uim",$message_preg, $mathes)){
json_decode($vips);

$list = "";
foreach ($vips as $vip) {

$list .= "@{$vip["user_name"]} [<b>{$vip["user_id"]}</b>] \n Роль: {$vip["role"]} Добавил @{$vip["add_by"]} \n Дата {$vip["date_add"]} \n ======================= \n";

}
sendMessage($chat_id,"Список вип пользователей: \n $list",$msgid,$replyMarkup);
}
?>