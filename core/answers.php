<?php
echo "answers loadedd   <br>";
switch($message) {

	case '/goth':  
     if(in_array($user_id_group, $vip_users2)){
			
	include 'core/commands/goth/goth.php';
	include 'core/commands/goth/preloader.php';
		    sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_goth,$replyMarkup);
        	 
}else{
	include 'commands/permission_denied.php';
}
        break;
        case 'sendmain':
        
        $inline_button1 = array("text"=>"Снять","callback_data" =>'/yes');
        $inline_button2 = array("text"=>"Пополнить","callback_data" =>'/no');
        $inline_keyboard = [[$inline_button1,$inline_button2]];
        $keyboard=array("inline_keyboard"=>$inline_keyboard);
        $replyMarkup = json_encode($keyboard);
        sendMessage($chat_id,"Какое действие вы хотите совершить?",$msgid,$replyMarkup);
        break;
        case '/tits':  
    include 'core/commands/tits/tits.php';
    include 'core/commands/tits/preloader.php';
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break;  
                case '/butts':  
    include 'core/commands/buts/buts_id.php';
    include 'core/commands/buts/preloader.php';
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break; 
                case 'butts':  
    include 'core/commands/buts/buts_id.php';
    include 'core/commands/buts/preloader.php';
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break; 
        case 'tits':  
    include 'core/commands/tits/tits.php';
    include 'core/commands/tits/preloader.php';
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
        break;
    case '/id':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
        case '/gif':
    include 'core/commands/gif/gif.php';
    include 'core/commands/gif/preloader.php';
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_gifs,$replyMarkup);
        break;  
        case '/commands':
            include 'commands/commands.php';
        break;
            case '/stats':
    include 'core/commands/tits/tits.php';
    include 'core/commands/gif/gif.php';
    include 'core/commands/buts/buts_id.php';
    include 'core/commands/goth/goth.php';
    sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>{$count_tits}</b> \n Задниц в базе: <b>{$count_butts}</b>\n goth ebm: <b>{$count_goth}</b> \n Гифок в базе: <b>{$count_gifs}</b> \n Вип юзеров: <b>{$count_vips}</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
        break;
        case '/vips@phphelperbot':
        sendMessage($chat_id,"Список премиум юзеров:".json_encode($vip_users),$msgid);
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
            include 'core/commands/buts/buts_id.php';
            include 'core/commands/goth/goth.php';
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>{$count_tits}</b> \n Задниц в базе: <b>{$count_butts}</b>\n goth ebm: <b>{$count_goth}</b> \n Гифок в базе: <b>{$count_gifs}</b> \n Вип юзеров: <b>{$count_vips}</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
        break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
    case '/id@phphelperbot':
        sendMessage($chat_id,"Твой ID: <b>{$user_id_group}</b>",$msgid);
    break;
    case '/help@phphelperbot':
            sendMessage($chat_id,"Бот понимает следующие команды: \n <b>/tits</b> - отправляет сиськи. \n <b>/butts</b> - отправляет попу. \n <b>/gif</b> - отправляет гифку.",$msgid);
        break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
        case '/gif@phphelperbot':
        include 'core/commands/gif/gif.php';
        include 'core/commands/gif/preloader.php';
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_gifs,$replyMarkup);
break;
            case '/tits@phphelperbot':  
     include 'core/commands/tits/tits.php';
     include 'core/commands/tits/preloader.php';
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
        break;  
       
             case '/butts@phphelperbot':  
     include 'core/commands/buts/buts_id.php';
     include 'core/commands/buts/preloader.php';
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break;
        case '/goth@phphelperbot':  
     if(in_array($user_id_group, $vip_users2)){
			
			include 'core/commands/goth/goth.php';
			include 'core/commands/goth/preloader.php';
		    sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_goth,$replyMarkup);
        	 
}else{
	include 'commands/permission_denied.php';
}
	break;
        
        

  default:
            //include 'commands/default/default.php';
        break;
}
switch($data){
    case '/voteup':
    // $inline_button1 = array("text"=>"Подвердить","callback_data"=>'/confirm_up');
    // $inline_button2 = array("text"=>"Изменить","callback_data"=>'/decline_up');
    // $inline_keyboard = [[$inline_button1,$inline_button2]];
    // $keyboard=array("inline_keyboard"=>$inline_keyboard);
    // $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Пользователь {$$username_call2} {$username_call} с ID: {$chat_id_in} {$chat_id_in2} в {$user_name_group_call}  Проголосовал за № {$rand} 👍",$msgid);
    break;
    case '/votedown':
    // $inline_button1 = array("text"=>"Подвердить","callback_data"=>'/confirm_down');
    // $inline_button2 = array("text"=>"Изменить","callback_data"=>'/decline_down');
    // $inline_keyboard = [[$inline_button1,$inline_button2]];
    // $keyboard=array("inline_keyboard"=>$inline_keyboard);
    // $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id_in,"Пользователь {$username_call} с ID: {$chat_id_in} в {$user_name_group_call}  Проголосовал 👎",$msgid);
    break;
}
?>
