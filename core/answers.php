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
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    answerCallbackQuery($msgid,"Ты проголосовал за","true");
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
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendChatAction($chat_id, "upload_photo");
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    break;

                case '/gif':  
          if ($user_name_group == 'Denormalization') {
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
         if ($user_name_group == 'Denormalization') {
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

    
//     //START OF THE GAME
//         case '[1]':
//             sendMessage($chat_id,"Не правильно",$msgid);
//     break;

//         case '[2]':
//             sendMessage($chat_id,"Угадал :happy:",$msgid);
//     break;
//         case '[3]':
//             sendMessage($chat_id,"Не правильно",$msgid);
//     break;
//         case '/game':
//             include 'commands/game/game_start.php';
//     break;
//     break;
//         case '[Хочу сыграть]':
//             include 'commands/game/game2.php';
//     break;
//         case '[Не хочу играть]':
//             include 'commands/game/game3.php';

//          case '[Я был не прав и иду нахуй]':
//             sendMessage($chat_id,"Хорошо что ты выбрал именно этот вариант. Иди нахуй",$msgid);
//     break;
//     break;
//         case '[закрыть меню]':
//             sendMessage($chat_id,"Закрываем меню");
//     break;
//         case '[Ты хуй]':
//             include 'commands/game/hyi.php';
//     break;
//     /// END OF THE GAME

//     //FIRST MESSAGE WHEN USER SAY /START
//         case '/start':
//             include 'commands/start/on_start.php';

//     // END OF THE /START
            
//         case '/help':
//             include 'commands/help.php'; 
//     break;
//         case '/location':
//             include 'commands/location.php'; 
//     break;
        case '/commands':
            include 'commands/commands.php';
    break;
        case '/bash':
            include 'commands/bash.php';
    break;
//         case '/sticker':
//             include 'commands/sticker.php';
//     break;
//         case '/kurs':
//             include 'commands/kurs.php';
//     break;
        case '/calendar':
            include 'commands/calendar.php';
    break;
        case '/sram':
            include 'commands/sram.php';
    break;
        case 'Бот ливни':
            sendMessage($chat_id,"Как скажешь..",$msgid);
            LeaveChat($chat_id);
    break;
/*
* LE KOSTIL FIX CATCH WORDS in GROUP
* in tet-a-tet msg bot find command like /help
* in GROUP bot find command like /help@phphelperbot
*/
//         case '/game@phphelperbot':
//             include 'commands/game/game_start.php';
//     break;
//         case '/pogoda@phphelperbot':
//             include 'commands/pogoda.php';
//     break;
//         case '/help@phphelperbot':
//             include 'commands/help.php'; 
//     break;
//         case '/location@phphelperbot':
//             include 'commands/location.php'; 
//     break;
        case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
//         case '/sticker@phphelperbot':
//             include 'commands/sticker.php';
//     break;
//         case '/kurs@phphelperbot':
//             include 'commands/kurs.php';
//     break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
                    case '/gif@phphelperbot':  
     if ($user_name_group == 'Denormalization') {
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
// case '/tits@phphelperbot':
//             include 'core/commands/tits/tits.php';
//     break;
  default:
            //include 'commands/default.php';
    break;
}
switch($data){
    case '/plz':
    sendMessage($chat_id, "plz");
    break;
}
?>
