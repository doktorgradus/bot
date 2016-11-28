<?php
    $inline_button1 = array("text"=>"👍 {$count[0]['cnt']}","callback_data" =>'/buttsup');
    $inline_button2 = array("text"=>"👎 {$count2[0]['cnt']}","callback_data" =>'/buttsdown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_photo");
?>
