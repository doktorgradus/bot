<?php
if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(kick [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	sendMessage($chat_id,"Кикаем юзера {$message[1]}",$msgid);
	sendMessage($chat_id,"Записали в базу юзера <b>{$message[1]}</b>  дату [".date('H:i:s')."] причину <b>{$message[2]}</b> \n Посмотреть - <a href='http://telegrambotv2.herokuapp.com/banlist.txt'>банлист</a>");
	$fp = fopen("banlist.txt", "a"); // Открываем файл в режиме записи 
	$mytext = "[".date('H:i:s')."]"."admin: {$user_first_name_group} "." user_id: {$message[1]} reason: {$message[2]} \r\n"; // Исходная строка
	$test = fwrite($fp, $mytext); // Запись в файл
	fclose($fp); //Закрытие файла
	kickchatmember($chat_id,$message[1]);
        	}
}

?>
