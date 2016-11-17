<?php
echo "QIWI SET LOAD21 <br>";
if(in_array($user_id_group, $vip_users)){
            if (preg_match_all("/(?<![\w\d])(qiwiset [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
        //sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
    $message = explode(" ", $message);
    $inline_button1 = array("text"=>"Назад в главное","callback_data" =>'/back_main');
    $inline_button2 = array("text"=>"Изменить номер","callback_data" =>'/change_qiwi');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendMessage($chat_id,"Вы установили кошелек {$message[1]}",$msgid,$replyMarkup);
             }
}
?>
