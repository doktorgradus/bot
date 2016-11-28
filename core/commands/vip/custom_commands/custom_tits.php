<?php
if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(tits [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	//sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
	include 'core/commands/tits/tits.php';
           $count = R::getAll("SELECT COUNT(vote_for) as cnt  FROM titsup WHERE vote_for={$message[1]};");
    $count2 = R::getAll("SELECT COUNT(vote_for) as cnt  FROM titsdown WHERE vote_for={$message[1]};");
   $inline_button1 = array("text"=>"👍 {$count[0]['cnt']}","callback_data" =>'/titsup');
    $inline_button2 = array("text"=>"👎 {$count2[0]['cnt']}","callback_data" =>'/titsdown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$message[1]],$msgid,"Тебе достался вариант №: {$message[1]} из {$count_tits}",$replyMarkup);
        	 }
}
?>
