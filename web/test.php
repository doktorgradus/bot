<?php
echo "<b>Результат работы бота</b>: ↓ <br><hr>";
ini_set('default_charset', 'UTF-8'); // кодировка
// ini_set('display_errors', '1');
$token = "bot281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM";
echo "Получить file_id  для бота";
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
<?php
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
// echo "<hr>";
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
// echo "<hr>";
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

if ($_POST['refresh']) {
	header("Location: /web/images.php");
}
if ($_POST['delete']) {
if (file_exists('./images'))
foreach (glob('./images/*') as $file)
unlink($file);
header("Location: /web/images.php");
}
echo "<hr>";
?>
