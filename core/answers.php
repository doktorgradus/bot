<?php
echo "answers loadedd   <br>";
switch($message) {
	case '/goth':  
     if(in_array($user_id_group, $vip_users2)){
			
			include 'core/commands/goth/goth.php';
			include 'core/commands/goth/preloader.php';
    		// $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
		    // $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
		    // $inline_keyboard = [[$inline_button1,$inline_button2]];
		    // $keyboard=array("inline_keyboard"=>$inline_keyboard);
		    // $replyMarkup = json_encode($keyboard);
		    // sendChatAction($chat_id, "upload_photo");
		    sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_goth,$replyMarkup);
        	 
}else{
	include 'commands/permission_denied.php';
}
        break;
        case '/tits':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break;  
                case '/butts':  
     include 'core/commands/buts/buts_id.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break; 
                        case 'butts':  
     include 'core/commands/buts/buts_id.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
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
        include 'commands/permission_denied.php';
    }
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
        case 'Бот ты тут?':
        	sendChatAction($chat_id,"upload_video");
            sendVideo($chat_id,"BAADAgAD2AADcU3NEF8_al2S4zpDAg",$msgid,"Ботик на месте!");
        break;
                case '/help':
            include 'commands/help.php';
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
            sendMessage($chat_id,"Общая статистика: \n Сисек в базе: <b>{$count_tits}</b> \n Задниц в базе: <b>{$count_butts}</b>\n goth ebm: <b>{$count_goth}</b> \n Гифок в базе: <b>{$count_gifs}</b> \n Вип юзеров: <b>{$count_vips}</b> \n @phphelperbot - дата обновления [".date('H:i:s')."]",$msgid);
        break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
    case 'ping Алкаш':
            sendMessage($chat_id,"ping @Quiss",$msgid);
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
        include 'commands/permission_denied.php';
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
       
             case '/butts@phphelperbot':  
     include 'core/commands/buts/buts_id.php';
    $inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_butts,$replyMarkup);
        break;
        case '/goth@phphelperbot':  
     if(in_array($user_id_group, $vip_users2)){
			
			include 'core/commands/goth/goth.php';
    		$inline_button1 = array("text"=>"👍","callback_data" =>'/voteup');
		    $inline_button2 = array("text"=>"👎","callback_data" =>'/votedown');
		    $inline_keyboard = [[$inline_button1,$inline_button2]];
		    $keyboard=array("inline_keyboard"=>$inline_keyboard);
		    $replyMarkup = json_encode($keyboard);
		    sendChatAction($chat_id, "upload_photo");
		    sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_goth,$replyMarkup);
        	 
}else{
	include 'commands/permission_denied.php';
}
	break;
        
        

  default:
            //include 'commands/default/default.php';
        break;
}

?>
