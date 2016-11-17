<?php
echo "answers loadedd   <br>";

switch($message) {


  case '/myid':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
    case '/commands':
  $replyText = "<pre>Товар:</pre>";
  $replyText .= "<code>/add</code> - Добавить товар\n";
  $replyText .= "<code>/pdel</code> - Удалить товар\n";
  $replyText .= "<code>/pview</code> - Просмотреть товар\n";
  $replyText .= "<code>/catadd</code> - Добавить категорию\n";
  $replyText .= "<code>/catset</code> - Изменить категорию\n";
  $replyText .= "<code>/catdel</code> - Удалить категорию\n";
  $replyText .= "<code>/StopBuy</code> - Остановить все продажи\n";
  $replyText .= "<code>/StartBuy</code> - Востановить продажи\n";
  
  
  $replyText .= "<pre>ADMINS:</pre>";
  $replyText .= "<code>/admins</code> - Статистика админов\n";
  $replyText .= "<code>/setrole</code> - Назначить\Удалить админа\n";
  $replyText .= "<code>/dolgprod</code> - Вешаем долг на админа\n";
  $replyText .= "<code>/clearstat</code> - Обнуляем то что он отдал\n";
  
  $replyText .= "<pre>PROCHIE:</pre>";
  $replyText .= "<code>/message</code> - Отправка уведомлений\n";
  $replyText .= "<code>/welcome</code> - Изменить приветствие\n";
  $replyText .= "<code>/topsecret</code> - Изменить создателя бота\n";
  $replyText .= "<code>ban</code> - Блокировать пользователя\n";
  $replyText .= "<code>kick</code> - Удалить пользователя\n";
  $replyText .= "<code>/myid</code> - Ваш ид в боте\n";
  $inline_button1 = array("text"=>"В главное меню","callback_data" =>'/back_main');
    $inline_button2 = array("text"=>"Правила","callback_data" =>'/system_rules');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id, $replyText,$msgid,$replyMarkup);
    break;
        case '/start':
        $inline_button1 = array("text"=>"Правила системы","callback_data" =>'/system_rules');
        $inline_button2 = array("text"=>"Список товара","callback_data" =>'/tovar_list');
        $inline_keyboard = [[$inline_button1,$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessage($chat_id,"Ув.пользователь у вас не установлен Qiwi кошелек, для проведения транзакций в системе, пожалуйста укажите следующим сообщением /qiwiset его, иначе вы не сможете пользоватся ботом. \n Если у вас нет кошелька вызовите команду /qiwihowto",$msgid,$replyMarkup);
    break;
     case '/qiwihowto':  
    $inline_button1 = array("text"=>"Офф.сайт QIWI","url"=>"https://qiwi.com/");
    $inline_button2 = array("text"=>"Видеотуториал","url"=>"https://www.youtube.com/watch?v=-u5ZIR9YjTk");
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
     sendMessage($chat_id,"Вы выбрали помощью по настройке Qiwi кошелька",$msgid,$replyMarkup);
    break;
         case '/help':  
    $inline_button1 = array("text"=>"В главное меню","callback_data" =>'/back_main');
    $inline_button2 = array("text"=>"Правила","callback_data" =>'/system_rules');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
     sendMessage($chat_id,"Текст с информацией о том, как пользоватся системой или ботом из Mysql",$msgid,$replyMarkup);
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
    sendMessage($chat_id_in,"Вы вернулись в главное меню \n Можете посмотреть список товаров или почитать наши правила. \n Если у вас возникли трудности воспользуйтесь нашим гайдом по системе написав /help \n",$msgid,$replyMarkup);
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

        case '/buy_tovar1':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment1');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/back_main');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация покупки товара №1 \n Оплатите 200 рублей на кошелек +380999536109 и обязательно укажите комментарий платежа 2949

ВНИМАНИЕ!! Время отведенное на оплату заказа - 30 минут.
Конечная дата платежа ".date('H:i:s'),$msgid,$replyMarkup);
    break;
            case '/buy_tovar2':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment2');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/back_main');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация покупки товара №2 \n Оплатите 250 рублей на кошелек +380999536109 и обязательно укажите комментарий платежа 1423

ВНИМАНИЕ!! Время отведенное на оплату заказа - 30 минут.
Конечная дата платежа ".date('H:i:s'),$msgid,$replyMarkup);
    break;
            case '/buy_tovar3':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment3');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/back_main');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация покупки товара №3 \n Оплатите 300 рублей на кошелек +380999536109 и обязательно укажите комментарий платежа 2711

ВНИМАНИЕ!! Время отведенное на оплату заказа - 30 минут.
Конечная дата платежа ".date('H:i:s'),$msgid,$replyMarkup);
    break;

            case '/check_payment1':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment1');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/otmenit_oplaty');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация проверки платежа №1 \n [<b>Сервисное сообщение</b>]:".date('H:i:s')."
Ошибка проверки платежа #1 - Не корректный реквизиты входа. Сообщите администратору 
В целях безопасности мы вынуждены прекратить работу бота",$msgid,$replyMarkup);
    break;

        case '/check_payment2':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment2');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/otmenit_oplaty');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация проверки платежа №2 \n [<b>Сервисное сообщение</b>]:".date('H:i:s')."
Ошибка проверки платежа #2 - Не корректный реквизиты входа. Сообщите администратору 
В целях безопасности мы вынуждены прекратить работу бота",$msgid,$replyMarkup);
    break;

        case '/check_payment3':
    $inline_button1 = array("text"=>"Проверить оплату","callback_data"=>'/check_payment3');
    $inline_button2 = array("text"=>"Отменить","callback_data"=>'/otmenit_oplaty');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Инициализация проверки платежа №3 \n [<b>Сервисное сообщение</b>]:".date('H:i:s')."
Ошибка проверки платежа #3 - Не корректный реквизиты входа. Сообщите администратору 
В целях безопасности мы вынуждены прекратить работу бота",$msgid,$replyMarkup);
    break;

            case '/otmenit_oplaty':
    $inline_button1 = array("text"=>"Я понял","callback_data"=>'/back_main');
    $inline_button2 = array("text"=>"В меню","callback_data"=>'/back_main');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"[<b>Сервисное сообщение</b>]:".date('H:i:s')."
    Помните, каждый раз когда Вы не оплачиваете товар в указанное время, отменяете покупку товара, у вас накапливаются негативные баллы. Со временем система заблокирует Вас и Вы какое-то время не сможете совершать покупки в нашем магазине. Заказывайте только то, что действительно будите покупать!
    Вы можете вернуться к главному меню /start или продолжить просмотр наших товаров \n ",$msgid,$replyMarkup);
    break;

}

