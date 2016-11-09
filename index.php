<?php
require __DIR__ . '/vendor/autoload.php';
/////////////////////////////////////
 require 'core/functions.php';     //
 require 'core/settings.php';      //
 require 'core/answers.php';       //
 //require 'core/catch.php';       //
/////////////////////////////////////


 		if(in_array($user_id_group, $vip_users)){
	        	if (preg_match_all("/(?<![\w\d])(getChatAdministrators [a-z]+)(?![\w\d])/uim",$message_preg, $mathes)) {
	    	sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
		$message = explode(" ", $message);
		
	    sendMessage($chat_id,"выбираем администраторов группы {$message[1]}");
	    $result = file_get_contents("https://api.telegram.org/bot281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM/getChatAdministrators?chat_id=@".$message[1]);
	    sendMessage($chat_id,"Список администраторов: {$result}");
	        	 }
}





        if(in_array($user_id_group, $vip_users2)){
        	if (preg_match_all("/(?<![\w\d])(goth [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	include 'core/commands/goth/goth.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$goth_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_goth,$replyMarkup);
        	 }
}


        if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(gif [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	include 'core/commands/gif/gif.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_gifs,$replyMarkup);
        	 }
}


        if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(tits [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_tits,$replyMarkup);
        	 }
}

        if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(butts [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	include 'core/commands/buts/buts_id.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$buts_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_butts,$replyMarkup);
        	}
}
        if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(kick [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	//sendMessage($chat_id,"Кикаем юзера {$message[1]}",$msgid);
	sendMessage($chat_id,"Записали в базу юзера <b>{$message[1]}</b>  дату [".date('H:i:s')."] причину <b>{$message[2]}</b> \n Посмотреть - <a href='http://telegrambotv2.herokuapp.com/banlist.txt'>банлист</a>");
	$fp = fopen("banlist.txt", "a"); // Открываем файл в режиме записи 
	$mytext = "[".date('H:i:s')."]"."admin: {$user_first_name_group} "." user_id: {$message[1]} reason: {$message[2]} \r\n"; // Исходная строка
	$test = fwrite($fp, $mytext); // Запись в файл
	fclose($fp); //Закрытие файла
	kickchatmember($chat_id,$message[1]);
        	}
}
//catch non vip users who spam stickers.
if(!in_array($user_id_group, $vip_users)){
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