<?php
echo "count vote vpsz <br>";

if ($message) {
    $sql = R::getAll("SELECT user_id  FROM newuser WHERE user_id='{$user_id_group}';");
    if ($sql) {
//sendMessage($chat_id,"Ты уже зарегистрирован в боте и можешь пользоватся его функциями",$msgid,$replyMarkup);
    }else{
//sendMessage($chat_id,"Добро пожаловать <b>{$first_name}</b> @{$username2} Ты успешно зарегистрировался!\n Возможно тебе следует посмотреть список моих функций и возможностей: \n /commands",$msgid);
$vote = R::dispense('newuser');
$vote->username = $username2;
$vote->user_id = $user_id_group;
$vote->from_group = $chat_username;
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
sendMessage(276712063,"Новый пользователь {$first_name} {$first_name2} @{$username2}  | ID: {$user_id_group}");
    }

}

if ($message == '/start') {
    $sql = R::getAll("SELECT user_id  FROM newuser WHERE user_id='{$user_id_group}';");
    if ($sql) {
sendMessage($chat_id,"Ты уже зарегистрирован в боте и можешь пользоватся его функциями",$msgid,$replyMarkup);
    }else{
sendMessage($chat_id,"Добро пожаловать <b>{$first_name}</b> @{$username2} Мы рады тебя видеть!\n Возможно тебе следует посмотреть список моих функций и возможностей: \n /commands",$msgid,$replyMarkup);
$vote = R::dispense('newuser');
$vote->username = $username2;
$vote->user_id = $user_id_group;
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
sendMessage(276712063,"Новый пользователь {$first_name} @{$username2}  | ID: {$user_id_group}");
    }

}


// $vote = R::dispense('logs');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->message = $message;
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
    //if(in_array($username2, $vip_users)){

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