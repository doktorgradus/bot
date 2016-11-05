<?php
    $document_id = [
    "BQADAgADEwADf0p-EK4baAro0kg6Ag",
    "BQADAgADGQADf0p-EMN4DeV_p9VRAg",
    "BQADAgADGwADf0p-EC4SbRhjYqwbAg",
    "BQADAgADHAADf0p-EDzOoI4PmScRAg",
    "BQADAgADHQADf0p-EEguK_QgvpkkAg",
    "BQADAgADHgADf0p-EGgMWUFbwMylAg",
    "BQADAgADHwADf0p-EKtrAZ-qY4JIAg",
    "BQADAgADLQADf0p-ELwPkuQN6AfeAg",
    "BQADAgADLgADf0p-EPz-RV1Cr06fAg",
    "BQADAgADLwADf0p-EE2cLUl63iySAg",
    "BQADAgADMAADf0p-EIijzqDPQcrrAg",
    "BQADAgADMQADf0p-EF3xzwjPz4yuAg",
    "BQADAgADMgADf0p-EBnIcs_cxCEFAg",
    "BQADAgADMwADf0p-EL0uU6mz9welAg",
    "BQADAgADNAADf0p-EIt9DXGksBYMAg",
    "BQADAgADNQADf0p-EB--PJJrQAk9Ag",
    "BQADAgADNgADf0p-EEWtMZy7OHD7Ag",
    "BQADAgADNwADf0p-ENlIWWc7CbBvAg",
    ];

    $rand = array_rand($document_id);
    $count_gifs = count($document_id);
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count_gifs,$replyMarkup);

?>
