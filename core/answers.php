<?php
echo "answers loadedd new try   <br>";
$vips = R::getCol('SELECT user_name FROM viplist');
$admins = R::getCol('SELECT user_name FROM viplist WHERE role=2');
switch($message) {
    case '/goth':  
    if(in_array($username2, $vips)){		
	include 'core/commands/goth/goth.php';
	include 'core/commands/goth/preloader.php';
		    sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_goth,$replyMarkup);	 
}else{
	include 'commands/permission_denied.php';
}
    break;
    case '/tits':  
    include 'core/commands/tits/tits.php';
    include 'core/commands/tits/preloader.php';
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_tits}",$replyMarkup);
    break;  
    case '/butts':  
    include 'core/commands/buts/buts_id.php';
    include 'core/commands/buts/preloader.php';
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_butts}",$replyMarkup);
    break;  
    case '/gif':
    include 'core/commands/gif/gif.php';
    include 'core/commands/gif/preloader.php';
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_gifs}",$replyMarkup);
    break;  
    case '/commands':
    include 'commands/commands.php';
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
    if(in_array($username2, $admins)){
    include 'commands/leave/leave.php';
}
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
    case '/calendar@phphelperbot':
    include 'commands/calendar.php';
    break;
    case '/sram@phphelperbot':
    include 'commands/sram.php';
    break;
    case '/gif@phphelperbot':
    include 'core/commands/gif/gif.php';
    include 'core/commands/gif/preloader.php';
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_gifs}",$replyMarkup);
    break;
    case '/tits@phphelperbot':  
    include 'core/commands/tits/tits.php';
    include 'core/commands/tits/preloader.php';
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_tits}",$replyMarkup);
    break;  
       
    case '/butts@phphelperbot':  
    include 'core/commands/buts/buts_id.php';
    include 'core/commands/buts/preloader.php';
    sendPhoto($chat_id,$buts_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_butts}",$replyMarkup);
    break;
    case '/goth@phphelperbot':  
    if(in_array($username2, $vips)){
			
	include 'core/commands/goth/goth.php';
	include 'core/commands/goth/preloader.php';
	sendPhoto($chat_id,$goth_id[$rand],$msgid,"Тебе достался вариант №: {$rand} из {$count_goth}",$replyMarkup);	 
    }else{
	include 'commands/permission_denied.php';
}
	break;
        
        

  default:
            //include 'commands/default/default.php';
        break;
}
?>
