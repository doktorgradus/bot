<?php
require 'libs/rb.php';
echo "DB inluaded <br>";
    R::setup( 'mysql:host=127.0.0.1;dbname=bot_db',
        'root', '123' ); //for both mysql or mariaDB
$access_token = '281890161:AAFV11sF1GhyZ4NAREsFK3AjoFYuA5FmOKQ';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
$callback_query = $output['callback_query'];
$data = $callback_query['data'];
$message_id = ['callback_query']['message']['message_id'];
$chat_id_in = $callback_query['message']['chat']['id'];
$callback_id = $output['callback_query']['id'];
$msgid = $output['message']['message_id'];
switch($message) {
    case '/tits':
    $photo_id = [
    "AgADAgAD0a0xG3FNzRDf9mzm0Nl5n9_mgQ0ABGPlOHfECJpqb9oBAAEC",
    "AgADAgAD0q0xG3FNzRDZ9ZfknMp0PgrVgQ0ABNpMaAeSX7smI9gBAAEC",
    "AgADAgAD060xG3FNzRDAGCWbHkbczXjjgQ0ABIzy6So-mHSnBdYBAAEC",
    "AgADAgAD1K0xG3FNzRD9feURioQQdpHfgQ0ABAvbvQUq2hNZvNwBAAEC",
    "AgADAgAD1a0xG3FNzRBxiS0BZz55qvfegQ0ABIZyF5B7VSem3d0BAAEC",
    ];
    $inline_button1 = array("text"=>"👍","callback_data"=>'/titsup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/titsdown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    $rand = array_rand($photo_id);
    $count_tits = count($photo_id);
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_tits,$replyMarkup);
    break;
}
switch($data){
    case '/titsup':
    answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
$vote = R::dispense('titsupa');
$vote->username = "test";
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    break;

case '/titsdown':
    answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
    break;
    }
function sendMessage($chat_id, $message, $replyMarkup) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&reply_markup=' . $replyMarkup);
}
function answerCallbackQuery($callback_id,$text,$show) {
  file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_id .'&text=' . $text .'&show_alert='.$show);
 }

function sendPhoto($chat_id, $photo_id, $msgid,$caption,$replyMarkup) {
file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id .'&reply_to_message_id='.$msgid. '&photo=' . $photo_id. '&caption=' . $caption. '&reply_markup=' . $replyMarkup);
}
