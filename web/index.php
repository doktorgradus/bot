<?php
echo "<b>Результат работы бота</b>: ↓ <br><hr>";
ini_set('default_charset', 'UTF-8'); // кодировка
// ini_set('display_errors', '1');
$token = "bot281890161:AAFV11sF1GhyZ4NAREsFK3AjoFYuA5FmOKQ";
echo "Получить file_id  для бота<br>";
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
echo "<hr>";
?>
<form method="post">
	<p><select size="3" multiple name="method">
    <option value="sendPhoto">sendPhoto</option>
    <option selected value="sendDocument">sendDocument</option>
    <option value="sendVideo">sendVideo</option>
   </select>
   	<select size="3" multiple name="value">
    <option value="photo">photo</option>
    <option selected value="document">document</option>
    <option value="video">video</option>
   </select>
   	<input type=submit name=button value=send></p>
</form>
<form method="post">
<p><select size="3" multiple name="groups_id">
    <option value="276712063">@oneerror</option>
    <option selected value="-1001080942465">@tits_and_flood</option>
    <option value="276712063">@phpgeeks</option></p>
    <textarea rows="3" cols="45" name="message">[<?=date('H:i:s')?>] <b>Updated:</b> add some</textarea>
<input type=submit name=message_send value="Send">
</form>
<?php
if ($_POST['message_send']) {
	file_get_contents("https://api.telegram.org/bot281890161:AAFV11sF1GhyZ4NAREsFK3AjoFYuA5FmOKQ/sendMessage?chat_id=".$_POST['groups_id']."&text=".$_POST['message']."&parse_mode=HTML");
}
if ($_POST['method'] == 'sendPhoto' && $_POST['value'] == 'photo') {
	$dir    = '/var/www/html/images/';
$files1 = scandir($dir);
function Scan($code){
	echo "<pre>";
	print_r($code);
	echo "</pre>";
}
// Scan($files1);
echo "<hr>";
if ($_POST['button']) {
	foreach ($files1 as $file) {
// echo "result file_id from array<br>";
$bot_url    = "https://api.telegram.org/".$token;
$url        = $bot_url . "/sendPhoto?chat_id=276712063";
$post_fields = array(
	'photo'   => new CURLFile(realpath("/var/www/html/images/".$file)),
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
 $output = curl_exec($ch);
 $output = json_decode($output, true);
echo "\""."{$output['result']['photo'][0]['file_id']}"."\",".'<br>';
}
}
}
if ($_POST['method'] == 'sendDocument' && $_POST['value'] == 'document') {
	$dir    = '/var/www/html/document/';
$files1 = scandir($dir);
function Scan($code){
	echo "<pre>";
	print_r($code);
	echo "</pre>";
}
// Scan($files1);
echo "<hr>";
if ($_POST['button']) {
	foreach ($files1 as $file) {
// echo "result file_id from array<br>";
$bot_url    = "https://api.telegram.org/".$token;
$url        = $bot_url . "/sendDocument?chat_id=276712063";
$post_fields = array(
	'document'   => new CURLFile(realpath("/var/www/html/document/".$file)),
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
 $output = curl_exec($ch);
 // var_dump($output);
 $output = json_decode($output, true);
echo "\""."{$output['result']['document']['file_id']}"."\",".'<br>';
}
}
}
if ($_POST['method'] == 'sendVideo' && $_POST['value'] == 'video') {
	$dir    = '/var/www/html/video/';
$files1 = scandir($dir);
function Scan($code){
	echo "<pre>";
	print_r($code);
	echo "</pre>";
}
// Scan($files1);
echo "<hr>";
if ($_POST['button']) {
	foreach ($files1 as $file) {
// echo "result file_id from array<br>";
$bot_url    = "https://api.telegram.org/".$token;
$url        = $bot_url . "/sendVideo?chat_id=276712063";
$post_fields = array(
	'video'   => new CURLFile(realpath("/var/www/html/video/".$file)),
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
 $output = curl_exec($ch);
 // var_dump($output);
 $output = json_decode($output, true);
echo "\","."{$output['result']['video']['file_id']}"."\",".'<br>';
}
}
}
// var_dump($_POST);
echo "В папке web/images : <b>".count(scandir('/var/www/html/images/'))."</b> файлов <br>";
echo "В папке web/document : <b>".count(scandir('/var/www/html/document/'))."</b> файлов <br>";
echo "В папке web/video : <b>".count(scandir('/var/www/html/video/'))."</b> файлов <br>";
// $dir = "images/";
// $exclude = array( ".","..","error_log","_notes" );
// if (is_dir($dir)) {
//     $files = scandir($dir);
//     foreach($files as $file){
//         if(!in_array($file,$exclude)){
//             echo '<details><img src="' . $dir . $file . '" /></details>';
//         }
//     }
// }
echo "<hr>";
?>

