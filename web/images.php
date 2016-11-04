<?php
require 'db.php';
echo "<b>Результат работы бота</b>: ↓ <br><hr>";
ini_set('default_charset', 'UTF-8'); // кодировка
$token = "bot281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM";
echo "Получить file_id c фотографий в папке /profiles/k/ke/kef/kefzce/botoid.zzz.com.ua/web/images";
?>
<form method="post">
	<input type=submit name=submit value=GET_FILE_ID>
	<input type=submit name=refresh value=REFRESH>
	<input type=submit name=delete value=DELETE_IMAGES_FROM_FOLDER>
</form>
<?php
echo "<hr>";
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo "<hr>";
echo "В папке web/images :<b>".count(scandir(realpath('/profiles/k/ke/kef/kefzce/botoid.zzz.com.ua/web/images')))."</b> файлов";
$dir = "/profiles/k/ke/kef/kefzce/botoid.zzz.com.ua/web/images";
$exclude = array( ".","..","error_log","_notes" );
if (is_dir(realpath($dir))) {
    $files = scandir($dir);
    foreach($files as $file){
        if(!in_array($file,$exclude)){
            echo '<details><img src="' . $dir . $file . '" /></details>';
        }
    }
}
$dir    = '/profiles/k/ke/kef/kefzce/botoid.zzz.com.ua/web/images';
$files1 = scandir(realpath($dir));
function Scan($code){
	echo "<pre>";
	print_r($code);
	echo "</pre>";
}
// Scan($files1);
echo "<hr>";
if ($_POST['submit']) {
	foreach ($files1 as $file) {

$bot_url    = "https://api.telegram.org/".$token;
$url        = $bot_url . "/sendPhoto?chat_id=276712063";
$post_fields = array(
	'photo'   => new CURLFile(realpath("/profiles/k/ke/kef/kefzce/botoid.zzz.com.ua/web/images".$file)),
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
 echo $output = curl_exec($ch);
 $output = json_decode($output, true);
foreach ($output['result'] as $key => $value) {
	echo $image = $value[0]['file_id'].'<br>';
	$images = R::dispense('images');
	$images->file_id = $image;
	$images->date_add = date('H:i:s',time());
	R::store($images);
}
}
}
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