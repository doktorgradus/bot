<?php
$callback_query = $output['callback_query'];
$data = $callback_query['data'];
echo "answers loadedd   <br>";
switch($message) {
            case '/tits':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    answerCallbackQuery($msgid,"Ты проголосовал за ","true");
    editMessageText($chat_id,$message_id,$msgid,"Ты проголосовал за или нет я хз");
    break;  
           case 'tits':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    break;

                case '/gif':  
          if ($user_name_group == 'Denormalization' or 'ExileeD') {
    include 'core/commands/gif/gif.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
        sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
}else{
sendMessage($chat_id,"Сорре, но ты не @Denormalization или @ExileeD",$msgid);
}
    break;  
                    case 'gif':  
         if ($user_name_group == 'Denormalization' or 'ExileeD') {
    include 'core/commands/gif/gif.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
        sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
}else{
sendMessage($chat_id,"Сорре, но ты не @Denormalization или @ExileeD",$msgid);
}
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
        if ($user_name_group == 'oneerror') {
            sendMessage($chat_id,"Как скажешь..",$msgid);
            LeaveChat($chat_id);
        }else{
            sendMessage($chat_id,"Ага...щас",$msgid);
        }
    break;
        case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
                    case '/gif@phphelperbot':  
     if ($user_name_group == 'Denormalization' or 'ExileeD') {
    include 'core/commands/gif/gif.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
        sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
}else{
sendMessage($chat_id,"Сорре, но ты не @Denormalization или @ExileeD",$msgid);
}
    break; 
                case '/tits@phphelperbot':  
     include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/plz');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    break;  

  default:
            //include 'commands/default.php';
    break;
}
?>
