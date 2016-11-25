<?php
echo "count vote vpsz <br>";


if ($message == '/start') {
$vote = R::dispense('newuser');
$vote->username = $username2;
$vote->user_id = $user_id_group;
$vote->date_add = date('Y-m-d H:i:s');
$id = R::store( $vote );
sendMessage(276712063,"Новый пользователь @{$username2}  | ID: {$user_id_group}");
}

// $vote = R::dispense('logs');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->message = $message;
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     if(in_array($username2, $vip_users)){

//             if (preg_match_all("/(?<![\w\d])(count [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {

//     $message = explode(" ", $message);
//         $count = R::getAll("SELECT COUNT(vote_for) as cnt  FROM voteup WHERE vote_for={$message[1]};");
//     $count2 = R::getAll("SELECT COUNT(vote_for) as cnt  FROM votedown WHERE vote_for={$message[1]};");
//     $inline_button1 = array("text"=>"👍 {$count[0]['cnt']}","callback_data" =>'/voteup');
//     $inline_button2 = array("text"=>"👎 {$count2[0]['cnt']}","callback_data" =>'/votedown');
//     $inline_keyboard = [[$inline_button1,$inline_button2]];
//     $keyboard=array("inline_keyboard"=>$inline_keyboard);
//     $replyMarkup = json_encode($keyboard);
//     $votes = $count[0]['cnt'];

//     sendMessage($chat_id,"Кол-во голосов за  девушку № {$message[1]}:",$msgid,$replyMarkup);
//              }
// }


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


//buts
// if ($data == '/buttsup') {
//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM buttsup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
// $vote = R::dispense('buttsup');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }elseif ($data == '/buttsdown') {

//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM buttsdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
// $vote = R::dispense('buttsdown');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }

// //Gifs
// if ($data == '/gifsup') {
//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM gifsup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
// $vote = R::dispense('gifsup');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }elseif ($data == '/gifsdown') {

//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM gifsdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
// $vote = R::dispense('gifsdown');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }

// if ($data == '/gothup') {
//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM gothup WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👍","false");
// $vote = R::dispense('gothup');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }elseif ($data == '/gothdown') {

//     if(in_array($user_name_group_call2, $ban_users)){
//         answerCallbackQuery($callback_id,"Ты забанен, хуесос {$user_name_group_call2}","false");
// }else{
//     $voted = explode(" ", $nice);
//     $sql = "SELECT COUNT(vote_for) as cnt FROM gothdown WHERE vote_for='{$voted[4]}' and username='{$user_name_group_call2}';";
//     $count = R::getAll($sql);
//     if ($count[0]['cnt'] > 0) {
//         answerCallbackQuery($callback_id,"Нельзя голосовать дважды","false");
//         // sendMessage($chat_id_in,"ты уже голосовал за эту фотографию",$msgid);
//     }else{
// answerCallbackQuery($callback_id,"Ты проголосовал 👎","false");
// $vote = R::dispense('gothdown');
// $vote->username = $user_name_group_call2;
// $vote->user_id = $chat_id_in2;
// $vote->in_group = $nice2;
// $vote->vote_for = $voted[4];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
//     }


// }
// }





?>