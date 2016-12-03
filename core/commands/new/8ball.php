<?php
echo "<br> 8 ball load ".__FILE__;
           if (preg_match_all("/(?<![\w\d])(8ball [а-я]+)(?![\w\d])/uim",$message_preg, $mathes)) {
                $answers = ["Да","Нет","Не знаю","Мне похуй","чего пристал?","наверное","Бесспорно","Предрешено","Никаких сомнений","Определённо да","Можешь быть уверен в этом","Мне кажется — «да»","Вероятнее всего","Хорошие перспективы","Знаки говорят — «да»","Пока не ясно, попробуй снова","Спроси позже","Лучше не рассказывать","Сейчас нельзя предсказать","Сконцентрируйся и спроси опять","Даже не думай","Мой ответ — «нет»","По моим данным — «нет»","Перспективы не очень хорошие","Весьма сомнительно"];
                $rand = array_rand($answers);
sendMessage($chat_id,"Твой ответ: {$answers[$rand]}",$msgid);
             }
             if ($message == 'даун') {
             	sendMessage($chat_id,"Сам даун",$msgid);
             }elseif ($message == 'дурак') {
             	editMessageText($chat_id,$msgid -1,"Сам дурак");
             }elseif ($message == 'идиот') {
             	editMessageText($chat_id,$msgid -2,"Сам идиот");
             }elseif ($message == 'придурок') {
             	editMessageText($chat_id,$msgid -3,"Сам придурок");
             }


if (preg_match_all("/(?<![\w\d])(reload [0-9]+)(?![\w\d])/uim",$message_preg, $mathes)) {
	$message = explode(" ", $message);
    $count = R::getAll("SELECT COUNT(vote_for) as cnt  FROM buttsup WHERE vote_for={$message[1]};");
    $count2 = R::getAll("SELECT COUNT(vote_for) as cnt  FROM buttsdown WHERE vote_for={$message[1]};");
    $inline_button1 = array("text"=>"👍 {$count[0]['cnt']}","callback_data" =>'/buttsup');
    $inline_button2 = array("text"=>"👎 {$count2[0]['cnt']}","callback_data" =>'/buttsdown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
	editMessageReplyMarkup($chat_id,$msgid -1,$replyMarkup);
	}
?>
