<?php
echo "answers loadedd   <br>";

switch($message) {
        case '/start':
    $inline_button1 = array("text"=>"Правила системы","callback_data" =>'/system_rules');
        $inline_button2 = array("text"=>"Список товара","callback_data" =>'/tovar_list');
        $inline_keyboard = [[$inline_button1,$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessage2($chat_id,"Ув.пользователь у вас не установлен Qiwi кошелек, для проведения транказций в системе, пожалуйста укажите следующим сообщением /qiwiset его, иначе вы не сможете пользоватся ботом. \n Если у вас нет кошелька вызовите команду /qiwihowto",$msgid,$replyMarkup);
    break;
    case '/test':  
    $inline_button1 = array("text"=>"Google url","url"=>"http://google.com");
    $inline_button2 = array("text"=>"work plz","callback_data"=>'/plz');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
     sendMessage2($chat_id, "ok", $replyMarkup);
    break;
        case '/rules':
    $inline_button1 = array("text"=>"Вернутся назад","callback_data" =>'/back_forward');
    $inline_button2 = array("text"=>"Список товаров","callback_data" =>'/tovar_list');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendMessage($chat_id_in, "Ты выбрал правила системы:",$msgid,$replyMarkup);
    break;
     case '/qiwihowto':  
    $inline_button1 = array("text"=>"Офф.сайт QIWI","url"=>"https://qiwi.com/");
    $inline_button2 = array("text"=>"Видеотуториал","url"=>"https://www.youtube.com/watch?v=-u5ZIR9YjTk");
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
     sendMessage2($chat_id,"Вы выбрали помощью по настройке Qiwi кошелька",$msgid,$replyMarkup);
    break;
}
switch($data){
    case '/system_rules':
    $inline_button1 = array("text"=>"Вернутся назад","callback_data"=>'/back_main');
    $inline_button2 = array("text"=>"Список товара","callback_data"=>'/tovar_list');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage2($chat_id_in,"Правила системы",$msgid,$replyMarkup);
    break;
}
function sendMessage2($chat_id, $message, $msgid,$replyMarkup) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id.'&reply_to_message_id='.$msgid . '&text=' . urlencode($message) . '&reply_markup=' . $replyMarkup);
}
