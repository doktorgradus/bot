<?
echo "Settings loadedd  <br>";
// include 'Botan.php'; //disabled

error_reporting(E_ALL);
date_default_timezone_set('Europe/Moscow');
$access_token = $_ENV['TELEGRAM_TOKEN'];
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$msgid = $output['message']['message_id'];
$date = $output['message']['date'];
$message = $output['message']['text'];
$callback_query = $output['callback_query'];
$data = $callback_query['data'];
$message_preg = $output['message']['text'];
$sticker = $output['message']['sticker'];
$username =$output['message']['chat']['username'];
$user_id_group = $output['message']['from']['id'];
$user_first_name_group = $output['message']['from']['first_name'];
$user_name_group = $output['message']['from']['username'];
// VIP USERS
$vip_users = ["276712063","233780968","76484596","298347855","92116599"];
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
