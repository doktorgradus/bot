<?php
echo "QIWI SET LOAD <br>";
if(in_array($user_id_group, $vip_users)){
            if (preg_match_all("/(?<![\w\d])(qiwiset [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    //sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
    $message = explode(" ", $message);
    $inline_button1 = array("text"=>"Сохранить","callback_data" =>'Сохранить');
    $inline_button2 = array("text"=>"Изменить","callback_data" =>'Изменить');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    //sendPhoto($chat_id,$photo_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_tits,$replyMarkup);
    $vote = R::dispense('qiwiset');
    $vote->date_add = date('Y-m-d H:i:s');
    $vote->username = "testing";
    $vote->qiwinumber = $message[1];
    $vote->user_id = "3214";
    $id = R::store( $vote );
    sendMessage($chat_id,"Вы успешно установили следующий кошелек ".$message[1],$msgid,$replyMarkup);
             }
}

?>