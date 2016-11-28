<?php
echo "QIWI SET LOAD vps <br>";
if(in_array($user_id_group, $vip_users)){
            if (preg_match_all("/(?<![\w\d])(vote [0-9]{1,9})(?![\w\d])/uim",$message_preg, $mathes)) {
    //sendMessage($chat_id,"Ваше сообщение полное {$message}",$msgid);
    $message = explode(" ", $message);
    $inline_button1 = array("text"=>"Сохранить","callback_data" =>'Сохранить');
    $inline_button2 = array("text"=>"Изменить","callback_data" =>'Изменить');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    //sendPhoto($chat_id,$photo_id[$message[1]],$msgid,"Тебе достался вариант №: ".$message[1]." из ".$count_tits,$replyMarkup);
// $vote = R::dispense('vote');
// $vote->username = $user_name_group;
// $vote->first_name = $user_first_name_group;
// $vote->user_id = $user_id_group;
// $vote->vote_for = $message[1];
// $vote->date_add = date('Y-m-d H:i:s');
// $id = R::store( $vote );
// if ($id) {
//     echo "all is OK";
// }
    //$test = R::getAll("SELECT * FROM static LIMIT {$message[1]}");
    sendMessage($chat_id,"Проголосовали за: ".$message[1],$msgid,$replyMarkup);
             }
}
?>