<?php
echo "answers loadedd   <br>";

switch($message) {
        case '/start':
        $inline_button1 = array("text"=>"Правила системы","callback_data" =>'/system_rules');
        $inline_button2 = array("text"=>"Список товара","callback_data" =>'/tovar_list');
        $inline_keyboard = [[$inline_button1,$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessage($chat_id,"Ув.пользователь у вас не установлен Qiwi кошелек, для проведения транказций в системе, пожалуйста укажите следующим сообщением /qiwiset его, иначе вы не сможете пользоватся ботом. \n Если у вас нет кошелька вызовите команду /qiwihowto",$msgid,$replyMarkup);
    break;
     case '/qiwihowto':  
    $inline_button1 = array("text"=>"Офф.сайт QIWI","url"=>"https://qiwi.com/");
    $inline_button2 = array("text"=>"Видеотуториал","url"=>"https://www.youtube.com/watch?v=-u5ZIR9YjTk");
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
     sendMessage($chat_id,"Вы выбрали помощью по настройке Qiwi кошелька",$msgid,$replyMarkup);
    break;
}
switch($data){
    case '/system_rules':
    $inline_button1 = array("text"=>"Вернутся назад","callback_data"=>'/back_main');
    $inline_button2 = array("text"=>"Список товара","callback_data"=>'/tovar_list');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Текст Правил с-мы из Mysql",$msgid,$replyMarkup);
    break;
    case '/tovar_list':
    $inline_button1 = array("text"=>"Вернутся назад","callback_data"=>'/back_main');
    $inline_button2 = array("text"=>"Выбрать товар для покупки","callback_data"=>'/buy_tovar');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Список товаров из Mysql:\n 1. Тестовый товар. Цена 200р. кол-во: 3 \n 2. Тестовый товар2. Цена 250р. кол-во: 4 \n 3. Тестовый товар3. Цена 300р. кол-во: 150 \n",$msgid,$replyMarkup);
    break;
    case '/back_main':
    $inline_button1 = array("text"=>"Список товаров","callback_data"=>'/tovar_list');
    $inline_button2 = array("text"=>"Правила с-мы","callback_data"=>'/system_rules');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Вы в главном меню",$msgid,$replyMarkup);
    break;

        case '/buy_tovar':
    $inline_button1 = array("text"=>"Купить №1","callback_data"=>'/buy_tovar1');
    $inline_button2 = array("text"=>"Купить №2","callback_data"=>'/buy_tovar2');
    $inline_button3 = array("text"=>"Купить №3","callback_data"=>'/buy_tovar3');
    $inline_button4 = array("text"=>"Назад","callback_data"=>'/back_main');
    $inline_keyboard = [[$inline_button1,$inline_button2,$inline_button3,$inline_button4]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Список товаров из Mysql:\n 1. Тестовый товар. Цена 200р. кол-во: 3 \n 2. Тестовый товар2. Цена 250р. кол-во: 4 \n 3. Тестовый товар3. Цена 300р. кол-во: 150 \n",$msgid,$replyMarkup);
    break;
}

