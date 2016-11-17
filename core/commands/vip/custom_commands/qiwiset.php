<?php
echo "QIWI SET LOAD2 <br>";
            if (preg_match_all("/(?<![\w\d])(qiwiset [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    sendMessage($chat_id,"Ваше сообщение {$message}",$msgid);
    $message = explode(" ", $message);
    $inline_button1 = array("text"=>"Сохранить","callback_data" =>'accept_qiwi');
    $inline_button2 = array("text"=>"Изменить","callback_data" =>'change_qiwi');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);

    sendMessage($chat_id,"Вы успешно установили следующий кошелек ".$message[1],$msgid,$replyMarkup);
             }
?>
