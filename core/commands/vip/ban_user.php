<?php
            if (preg_match_all("/(?<![\w\d])(ban [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    sendMessage($chat_id,"Ваше сообщение  {$message}",$msgid);
    $message = explode(" ", $message);
    $inline_button1 = array("text"=>"В главное меню","callback_data" =>'/back_main');
    $inline_button2 = array("text"=>"Список команд","callback_data" =>'/commands');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    //sendPhoto($chat_id,$photo_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_tits,$replyMarkup);
    sendMessage($chat_id,"Вы забанили след. юзера ".$message[1],$msgid,$replyMarkup);
             }?>

