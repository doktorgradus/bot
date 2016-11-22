<?php
//////////////////////////////////////////////
//require __DIR__ . '/vendor/autoload.php'; //
require 'core/functions.php';               //
require 'core/settings.php';                //
require 'core/answers.php';                 //
 //require 'core/catch.php';  				//
require 'libs/db.php';		                //
require 'core/commands/vip/loader.php';     //
//////////////////////////////////////////////
// if(!in_array($user_id_group, $vip_users)){
// 	 if ($photo) {
// 	sendMessage($chat_id,"Слы нахуй иди",$msgid);
// 	//kickChatMember($chat_id,$user_id);
// }
// }
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


$link = mysqli_connect($server,$username,$password) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

if (!($result=mysqli_query($link,$sql))) {
        printf("Error: %s\n", mysqli_error($link));
    }

while( $row = mysqli_fetch_row( $result ) ){
        if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
            echo $row[0]."\r\n";
        }
    }
echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>';
?>