<?php
echo "answers loadedd   <br>";
switch($message) {
        case '/tits':  
     include 'core/commands/tits/tits.php';
        break;  
        case 'tits':  
     include 'core/commands/tits/tits.php';
        break;
    case '/id':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
        case '/gif':
    if ($user_id_group == '276712063' or '233780968'){

        include 'core/commands/gif/gif.php';
    }else{
        sendPhoto($chat_id,"AgADAgAD0KcxG39KfhA-GRnYblV4HWfogQ0ABJ4AAVZdeDP_viniAQABAg",$msgid,"{$user_name_group} тебе недоступна данная функция, лох 😆");
    }
        break;  
        case '/commands':
            include 'commands/commands.php';
        break;
            case '/stats':
            // include 'core/commands/tits/tits.php';
            // include 'core/commands/gif/gif.php';
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>212</b> \n Гифок в базе: <b>18</b> \n Вип юзеров: <b>3</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
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
    include 'commands/leave/leave.php';
        break;
    case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
            case '/stats@phphelperbot':
            // include 'core/commands/tits/tits.php';
            // include 'core/commands/gif/gif.php';
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>212</b> \n Гифок в базе: <b>18</b> \n Вип юзеров: <b>3</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
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
    if ($user_id_group == '276712063' or '233780968'){

        include 'core/commands/gif/gif.php';
    }else{
        sendPhoto($chat_id,"AgADAgAD0KcxG39KfhA-GRnYblV4HWfogQ0ABJ4AAVZdeDP_viniAQABAg",$msgid,"{$user_name_group} тебе недоступна данная функция, лох 😆");
    }
        break;
            case '/tits@phphelperbot':  
     include 'core/commands/tits/tits.php';
        break;  

  default:
            //include 'commands/default.php';
        break;
}
?>
