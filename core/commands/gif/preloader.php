<?php
$inline_button1 = array("text"=>"👍","callback_data"=>'/gifsup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/gifsdown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
?>
