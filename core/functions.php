<?php
echo "Functions loadedd   <br>";
function sendMessage($chat_id, $message, $msgid,$replyMarkup) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id.'&reply_to_message_id='.$msgid . '&text=' . urlencode($message) . '&reply_markup=' . $replyMarkup.'&parse_mode=HTML');
}

/**
 * Функция отправки сообщения sendMessage().
 */
// function sendKeyboard($chat_id, $message) {
//   file_get_contents($GLOBALS['api'] ."/sendmessage?chat_id=".$chat_id."&text=oi&reply_markup=".$reply);
// }

// function sendMessage($chat_id, $message, $msgid,$replyMarkup) {
//   file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id .'&parse_mode=HTML&disable_web_page_preview=true'.'&reply_to_message_id='.$msgid. '&text=' . urlencode($message).'&reply_markup=' . $replyMarkup);
// }
// function sendLocation($chat_id, $latitude , $longitude) {
//   file_get_contents($GLOBALS['api'] . '/sendLocation?chat_id=' . $chat_id . '&latitude='.$latitude.'&longitude='.$longitude);
// }
// function sendSticker($chat_id, $sticker) {
// file_get_contents($GLOBALS['api'] . '/sendSticker?chat_id=' . $chat_id . '&sticker=' . $sticker); 
// }
// function sendPhoto($chat_id, $photo_id, $msgid,$caption,$replyMarkup) {
// file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&photo=' . $photo_id. '&caption=' . $caption. '&reply_markup=' . $replyMarkup);
// }

// function sendDocument($chat_id, $document_id, $msgid,$caption,$replyMarkup) {
// file_get_contents($GLOBALS['api'] . '/sendDocument?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&document=' . $document_id. '&caption=' . $caption. '&reply_markup=' . $replyMarkup);
// }

// function sendChatAction($chat_id, $action) {
//   file_get_contents($GLOBALS['api'] . '/sendChatAction?chat_id=' . $chat_id .'&action=' . $action);
// }
// function leaveChat($chat_id) {
//   file_get_contents($GLOBALS['api'] . '/LeaveChat?chat_id=' . $chat_id);
// }

// function answerCallbackQuery($callback_query_id,$text,$show) {
//   file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_query_id .'&text=' . $text .'&show_alert='.$show);
// }


// function editMessageText($chat_id,$message_id,$msgid,$text) {
//   file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id=' . $chat_id .'&message_id=' . $msgid .'&text='.$text);
// }

// function kickchatmember($chat_id,$user_id) {
//   file_get_contents($GLOBALS['api'] . '/kickchatmember?chat_id=' . $chat_id."&user_id=".$user_id);
// }

// function sendVideo($chat_id, $video_id, $msgid,$caption) {
// file_get_contents($GLOBALS['api'] . '/sendVideo?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&video=' . $video_id. '&caption=' . $caption);
// }

// function getChatAdministrators($chat_id,$group){
// 	file_get_contents($GLOBALS['api'] ."/getChatAdministrators?chat_id=".$group);
// }
?>
