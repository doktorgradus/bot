<?php
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

?>
