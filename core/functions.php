<?php
echo "Functions loadedd   <br>";
/**
 * Функция отправки сообщения sendMessage().
 */
function sendKeyboard($chat_id, $message) {
  file_get_contents($GLOBALS['api'] ."/sendmessage?chat_id=".$chat_id."&text=oi&reply_markup=".$reply);
}

function sendMessage($chat_id, $message, $msgid) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id .'&parse_mode=HTML'.'&reply_to_message_id='.$msgid. '&text=' . urlencode($message));
}
function sendLocation($chat_id, $latitude , $longitude) {
  file_get_contents($GLOBALS['api'] . '/sendLocation?chat_id=' . $chat_id . '&latitude='.$latitude.'&longitude='.$longitude);
}
function sendSticker($chat_id, $sticker) {
file_get_contents($GLOBALS['api'] . '/sendSticker?chat_id=' . $chat_id . '&sticker=' . $sticker); 
}
function sendPhoto($chat_id, $photo_id, $msgid,$caption,$replyMarkup) {
file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&photo=' . $photo_id. '&caption=' . $caption. '&reply_markup=' . $replyMarkup);
}

function sendDocument($chat_id, $document_id, $msgid,$caption,$replyMarkup) {
file_get_contents($GLOBALS['api'] . '/sendDocument?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&document=' . $document_id. '&caption=' . $caption. '&reply_markup=' . $replyMarkup);
}

function sendChatAction($chat_id, $action) {
  file_get_contents($GLOBALS['api'] . '/sendChatAction?chat_id=' . $chat_id .'&action=' . $action);
}
?>
