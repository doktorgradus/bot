<?php
echo "QIWI SET LOAD";
//if(in_array($user_id_group, $vip_users)){
        	if (preg_match_all("/(?<![\w\d])(/qiwiset [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    	sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
	$message = explode(" ", $message);
    $inline_button1 = array("text"=>"👍","callback_data" =>'Сохранить кошелек');
    $inline_button2 = array("text"=>"👎","callback_data" =>'Изменить');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendMessage($chat_id,"Ты успешно установил свой кошелек {$message[1]}",$msgid,$replyMarkup);
        	 }
//}

?>
