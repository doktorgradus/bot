<?php
$access_token = '281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
$callback_query = $output['callback_query'];
$data = $callback_query['data'];
$message_id = ['callback_query']['message']['message_id'];
$chat_id_in = $callback_query['message']['chat']['id'];
switch($message) {
    case '/tits':  
         include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/up');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/down');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    break;
            case 'tits':  
         include 'core/commands/tits/tits.php';
    $inline_button1 = array("text"=>"👍","callback_data"=>'/up');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/down');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendPhoto($chat_id,$photo_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);
    break;
}
switch($data){
    case '/up':
    sendMessage($chat_id_in, "Ты проголосовал за");
    break;
    case '/down':
        sendMessage($chat_id_in, "Ты проголосовал против");
    break;
}
function sendMessage($chat_id, $message, $replyMarkup) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&reply_markup=' . $replyMarkup);
}
////////////////////////////////////
// require 'core/functions.php';     //
// require 'core/settings.php';      //
// require 'core/answers.php';       //
//require 'core/catch.php';         //
////////////////////////////////////


/*
* По дефолту используется parse_mode=HTML, изменить на Markdown можно в core/functions.php
* Все настройки и переменные бота заключены в файл core/settings.php
* База ответов бота находится по адресу core/answers.php - формата switch case (используется в *      основном для вызова комманд (commands папка))
* Файл core/catch.php содержит множественное вхождение слов, на которые отвечает бот формата        * preg_match_all
* Web_interface используется для логирование поступающих запросов к боту и вывода на экран.
* libs/Botan.php выключен по умолчанию в settings.php
* libs/simple_html_dom.php в данных момент не используется.
*/



/*
* Trying catch sticker and puts some log into the file
* $file = 'logs/log.txt'
* Log Example:
* name:username:date:sticker
* f4rt~:@oneerror:05:42:46:file_id
*/
//  if ($sticker) {
// 	sendMessage($chat_id,"ID message: ".$msgid. " Nickname : ".$first_name."username: ".$username." date:".date('H:i:s',$date)." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
// 	$file = 'logs/log.txt';
// // Открываем файл для получения существующего содержимого
// $current = file_get_contents($file);
// // Добавляем нового человека в файл
// $current .= $first_name.$firstname2.$date."\n";
// // Пишем содержимое обратно в файл
// file_put_contents($file, $current);
// }

echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>'
?>
