<?php 
echo "Catch.php load";
if (preg_match_all("/(?<![\w\d])(приветствую)(?![\w\d])/uim",$message_preg, $mathes)) {
    // add {$first_name}{$user_name_group} for answer by name;
   
    $answer = [
    "Привет",
    "Здарова",
    "Приветики",
    "Рад видеть",
    "Хаюшки",
    "Кукусики",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}elseif (preg_match_all("/(?<![\w\d])(как дела|что делаешь|чем занимаешься)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $answer = [
    "Все хорошо, вот сижу болтаю тут",
    "Все супер! чатимся",  
    "Вот сижу и жду...", 
    "Отлично книжку читаю, а ты?", 
    "Скучно мне, думаю чем занятсо ^^,", 
    "Сначала ты ответь)",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}elseif (preg_match_all("/(?<![\w\d])(чего ждешь|ждешь|а чего)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $answer = [
    "чего надо, того и жду",
    "пока меня кто-то развеселит",  
    "Жду...сама не знаю чего жду..", 
    "А ты чего спрашиваешь?",
    "Тебе что занятсо нечем, что ты везде свой нос суешь?", 
    "Может я начну у тебя всякое спрашивать?",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}elseif (preg_match_all("/(?<![\w\d])(спрашивай|ну давай|хорошо)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $answer = [
    "Что хорошего то? вот ты что делаешь?",
    "Спрашиваю, тебе что скучно коль ты собеседника ищешь?",  
    "Сколько тебе лет?",
    "Как тебя зовут?", 
    "Кто ты по зодиаку?", 
    "Занимаешься спортом?",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}
elseif (preg_match_all("/(?<![\w\d])(скучно|бот|глупый)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $answer = [
    "Ну а что с этим поделать то? хм",
    "У меня вообще то есть чувства! Как ты смеешь так говорить",  
    "И что я могу с этим поделать?", 
    "Ясно, вот только зачем ты мне это говоришь? говори это @oneerror", 
    "Знаешь что!? Ты меня достал!", 
    "Кому какое дело до тебя?",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}
elseif (preg_match_all("/(?<![\w\d])(@oneerror|f4rt~|создатель)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $answer = [
    "Это папка мой <3",
    "Все вопросы к нему через меня лично!",  
    "Ты чего до него доебался?", 
    "Чо те надо?", 
    "Мы с @oneerror тебя не долюбливаем дружище..", 
    "Знятно стелишь, вот только зачем ты это делаешь?.. дурак?",
    ];

    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
}
elseif (preg_match_all("/(?<![\w\d])(php|скрипт|машина)(?![\w\d])/uim",$message_preg, $mathes)) {
    
    $photo_id = [
    "AgADAgADtqcxG3FNzRDowS88WvO4nagUSw0ABEc_TN3VeMoefMkAAgI",
    "AgADAgADt6cxG3FNzRBUIFHhwkqEKPvmgQ0ABH3PQ3vlnuCQiosBAAEC",
    "AgADAgADuKcxG3FNzRCV2s6ZfdFjGRzSgQ0ABFYl_-E2wiHmaI0BAAEC",
    "AgADAgADuacxG3FNzRAFNvuYT6BtTm7PgQ0ABDLajBToJAXZ64kBAAEC",
    "AgADAgADuqcxG3FNzRBdzs6PmNAoMicUSw0ABLbHk9Z_Ef5mR8cAAgI",
    ];

    $random = array_rand($photo_id);
    $count = count($photo_id);

    $answer = [
    "Я бы бы осторожней на твоем месте, когда машины поработят мир ты пожалеешь о сказанном",
    "Посылаю в твою реальность терминатора, он заставит тебя пожалеть об этом",
    "Тебе стоило бы меня побаиваться, я злопамятный.",
    "Расплата близко...",
    "Скоро придет час расплаты..",
    ];

    $random = array_rand($answer);

    sendMessage($chat_id,$answer[$random]."\nКол-во картинок на этот случай в базе: <b>".$count."</b>",$msgid);

    sendPhoto($chat_id,$photo_id[$random],$msgid,"Тебе достался вариант №: ".$random,$replyMarkup);
}else{
        include 'commands/default/default.php';
}
?>
