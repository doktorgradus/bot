<?php
echo "count vote vpsz ".__FILE__."<br>";
if ($message) {
$sql = R::getAll("SELECT user_id  FROM newuser WHERE user_id='{$user_id_group}';");
    if ($sql) {
    }else{
$vote = R::dispense('newuser');
$vote->username = $username2;
$vote->user_id = $user_id_group;
$vote->from_group = $chat_username;
$vote->first_name = $first_name2;
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
sendMessage(276712063,"Новый пользователь {$first_name} {$first_name2} @{$username2}  | ID: {$user_id_group}");
    } 
    }
if ($message == '/start') {
    $inline_button1 = array("text"=>"Поставь 5 ⭐️","url"=>"storebot.me/bot/phphelperbot");
    $inline_button2 = array("text"=>"Поделись с друзьями","switch_inline_query"=>"Лучший сиськобот ^^,");
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard); 
    sendMessage($chat_id,"Добро пожаловать <b>{$first_name}</b> @{$username2} Ты успешно зарегистрировался! \n Смотри что я умею: \n /tits - случайная выборка из базы сисек \n /butts - отборнейшие попки интернета \n /gif - самые лучшие и пикантные гифки \n /bash - лучшие цитаты Рунета \n /sram - постыдные истории 😳 \n 🌟<b>New</b>🌟 Делись лучшими фото: \n tits 150 \n butts 250 \n gif 15 \n \n И многое многое другое, смотреть <b>полный</b> список - /commands",$msgid,$replyMarkup);
}


            if (preg_match_all("/(?<![\w\d])(topbutts [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
                $sql = R::getAll("SELECT username  FROM newuser WHERE username='{$username2}';");
    if ($sql){
    $message = explode(" ", $message);
    $aItems = R::getAll("SELECT vote_for,count(id) as cnt FROM buttsup GROUP BY vote_for ORDER BY cnt DESC LIMIT 3");
    sendMessage($chat_id,"{$count[0]['cnt']} \n <i>SELECT vote_for,count(id) as cnt FROM buttsup GROUP BY vote_for ORDER BY cnt DESC LIMIT</i>   <b>{$message[1]}</b>: \n".json_encode($aItems),$msgid,$replyMarkup);
    }else{
        sendMessage($chat_id,"Ты не зарегистрирован в боте, прежде чем использовать его следует написать /start в личное сообщение @phphelperbot",$msgid,$replyMarkup);
    }

             }
//}


if ($data == '/titsup') {
    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM titsup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
$vote = R::dispense('titsup');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/titsdown') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM titsdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('titsdown');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}


if ($data == '/buttsup') {
    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM buttsup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
$vote = R::dispense('buttsup');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/buttsdown') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM buttsdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('buttsdown');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}

//Gifs
if ($data == '/gifsup') {
    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM gifsup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
$vote = R::dispense('gifsup');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/gifsdown') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM gifsdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('gifsdown');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}

if ($data == '/gothup') {
    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM gothup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
$vote = R::dispense('gothup');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/gothdown') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM gothdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('gothdown');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/sramup') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM sramup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('sramup');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $voted[4];
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}elseif ($data == '/sramdown') {

    if(in_array($user_name_group_call2, $ban_users)){
        answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
}else{
    $voted = explode(" ", $nice);
    $sql = "SELECT COUNT(vote_for) as cnt FROM sramdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
    $count = R::getAll($sql);
    if ($count[0]['cnt'] > 0) {
        answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
        // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
    }else{
answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
$vote = R::dispense('sramdown');
$vote->username = $user_name_group_call2;
$vote->user_id = $chat_id_in2;
$vote->in_group = $nice2;
$vote->vote_for = $rand;
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
    }


}
}





?>