<?php
echo "answers loadedd   <br>";
switch($message) {
        case '/tits':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
        break;  
        case 'tits':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
        break;
    case '/id':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
        case '/gif':
    if(in_array($user_id_group, $vip_users)){

        include 'core/commands/gif/gif.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_gifs,$replyMarkup);

    }else{
        sendPhoto($chat_id,"AgADAgAD0KcxG39KfhA-GRnYblV4HWfogQ0ABJ4AAVZdeDP_viniAQABAg",$msgid,"{$user_name_group} тебе недоступна данная функция, лох 😆");
    }
        break;  
        case '/commands':
            include 'commands/commands.php';
        break;
            case '/stats':
            include 'core/commands/tits/tits.php';
            include 'core/commands/gif/gif.php';
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>{$count_tits}</b> \n Гифок в базе: <b>{$count_gifs}</b> \n Вип юзеров: <b>{$count_vips}</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
        break;
        case '/bash':
            include 'commands/bash.php';
        break;
        case '/calendar':
            include 'commands/calendar.php';
        break;
        case '/sram':
            include 'commands/sram.php';
        break;
        case 'Бот ливни':
        if(in_array($user_id_group, $vip_users)){
    include 'commands/leave/leave.php';
}
        break;
    case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
            case '/stats@phphelperbot':
            include 'core/commands/tits/tits.php';
            include 'core/commands/gif/gif.php';
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>{$count_tits}</b> \n Гифок в базе: <b>{$count_gifs}</b> \n Вип юзеров: <b>{$count_vips}</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
        break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
    case '/id@phphelperbot':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
        case '/gif@phphelperbot':

    if(in_array($user_id_group, $vip_users)){

        include 'core/commands/gif/gif.php';

    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_gifs,$replyMarkup);

    }else{
        sendPhoto($chat_id,"AgADAgAD0KcxG39KfhA-GRnYblV4HWfogQ0ABJ4AAVZdeDP_viniAQABAg",$msgid,"{$user_name_group} тебе недоступна данная функция, лох 😆");
    }
        break;
            case '/tits@phphelperbot':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
        break;  

  default:
            //include 'commands/default/default.php';
        break;
}
?>
