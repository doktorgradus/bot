<?php
    $document_id = [
    "BQADAgADEwADf0p-EK4baAro0kg6Ag",
    "BQADAgADGQADf0p-EMN4DeV_p9VRAg",
    "BQADAgADGwADf0p-EC4SbRhjYqwbAg",
    "BQADAgADHAADf0p-EDzOoI4PmScRAg",
    "BQADAgADHQADf0p-EEguK_QgvpkkAg",
    "BQADAgADHgADf0p-EGgMWUFbwMylAg",
    "BQADAgADHwADf0p-EKtrAZ-qY4JIAg",
    "AAQCABMPyYENAASGFMhgOf3tqzK3AAIC",
    "AAQCABN_9oENAAQR2VbGvDJhhijPAAIC",
    "AAQCABOQw4ENAAT6U-IFeMrlBHMDAAIC",
    "AAQCABNeCIINAAR4kAF-SZ9SOMC_AAIC",
    "AAQCABN8BYINAAQ7vg0Bsod2vZm1AAIC",
    "AAQCABPIA4INAARcSFCHFUUV5CK7AAIC",
    "AAQCABPo7oENAARRCiT8WOWv3X7RAAIC",
    "AAQCABNdxoENAASdhHmyGbeL5Q0FAAIC",
    "AAQCABMKroENAAQoZ_1oqrNVq0sDAAIC",
    "AAQCABPI8IENAATfQAxKR84zUVG7AAIC",
    "AAQCABO0toENAAQovXyfWFH_9URYAAIC",
    "AAQCABMGA4INAAROpMczkjHQq9m8AAIC",
    ];

    $rand = array_rand($document_id);
    $count = count($document_id);
    $inline_button1 = array("text"=>"👍","callback_data"=>'/voteup');
    $inline_button2 = array("text"=>"👎","callback_data"=>'/votedown');
    $inline_keyboard = [[$inline_button1,$inline_button2]];
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $replyMarkup = json_encode($keyboard);
    sendChatAction($chat_id, "upload_document");
    sendDocument($chat_id,$document_id[$rand],$msgid,"Тебе достался вариант №: ".$rand." из ".$count,$replyMarkup);

?>
