<?php
////////////////////////////////////
 require 'core/functions.php';     //
 require 'core/settings.php';      //
 require 'core/answers.php';       //
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




// if ($user_name_group == 'Denormalization') {
	 if ($sticker) {
	sendMessage($chat_id,"ID сообщения: ".$msgid. " Имя пользователя : ".$user_first_name_group.$first_name." ID пользователя: ".$user_id_group." Никнейм: ".$username.$user_name_group." date:".date('H:i:s',time())." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
}

echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>'
?>
