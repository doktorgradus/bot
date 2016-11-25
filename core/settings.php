<?php
echo "Settings loadedd  <br>";
// include 'Botan.php'; //disabled

error_reporting(E_ALL);
date_default_timezone_set('Europe/Moscow');
$access_token = '281890161:AAFV11sF1GhyZ4NAREsFK3AjoFYuA5FmOKQ';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$msgid = $output['message']['message_id'];
$date = $output['message']['date'];
$message = $output['message']['text'];
$callback_query = $output['callback_query'];
$callback_id = $output['callback_query']['id'];
$data = $callback_query['data'];
$message_preg = $output['message']['text'];
$sticker = $output['message']['sticker'];
$photo = $output['message']['file_id'];
$username = $output['message']['chat']['username'];
$username2 = $output['message']['from']['username'];
$user_id_group = $output['message']['from']['id'];
$user_first_name_group = $output['message']['from']['first_name'];
$user_first_name_group1 = $output['callback_query']['from']['first_name'];
$fn = $first_name.$user_first_name_group;
$nice = $output['callback_query']['message']['caption'];
$nice2 = $output['callback_query']['message']['chat']['title'];
$nice3 = $output['callback_query']['message']['date'];
$user_name_group = $output['message']['from']['username'];
$bot_id = '281890161';
$message_id = ['callback_query']['message']['message_id'];
$chat_id_in = $callback_query['message']['chat']['id'];
$chat_id_in2 = $callback_query['from']['id'];
$username_call = $callback_query['message']['chat']['username'];
$username_call2 = $callback_query['from']['username'];
$user_name_group_call = $callback_query['message']['from']['username'];
$user_name_group_call2 = $callback_query['from']['username'];
// VIP USERS
$admin = ["276712063"];
$ban_users = [""];
$vip_users = ["oneerror","ExileeD","karrrtaviy","Denormalization","infecti0N_113"];
$vip_users2 =["oneerror","ExileeD","Denormalization"]; // Denormalization user_id 4 goth 
$count_vips = count($vip_users);
// END VIP USERS
$emoji = array(
  'preload' => json_decode('"\uD83D\uDE03"'), // Улыбочка.
  'weather' => array(
    'clear' => json_decode('"\u2600"'), // Солнце.
    'clouds' => json_decode('"\u2601"'), // Облака.
    'rain' => json_decode('"\u2614"'), // Дождь.
    'snow' => json_decode('"\u2744"'), // Снег.
  ),
);
?>
