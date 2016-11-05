<?php
    $document_id = array();
    $document_id[] = "AAQCABNP9IENAAQ8IlXQsbxbxP-0AAIC";
    $document_id[] = "AAQCABMPWIQqAATbajVy5S7CH4rGAQABAg";
    $document_id[] = "AAQCABOGIoMqAAR-_CQz-44bDbYMAAIC";
    $document_id[] = "BQADAgADEwADf0p-EK4baAro0kg6Ag";
    $document_id[] = "AAQCABNSmIQqAAQwqHwJaIF2BTYQAAIC";
    $document_id[] = "AAQCABMH3IUqAAQyal0Ln5nq3qY3AAIC";
    $document_id[] = "AAQCABPkyIENAAQ7t-J8-nTT_IKxAAIC";
    $document_id[] = "AAQCABMTB4INAASkniu_vjbLdsmzAAIC";
    $document_id[] = "AAQCABNPlIQqAAR2msB28DrJR9QOAAIC";
    $document_id[] = "BQADAgADGQADf0p-EMN4DeV_p9VRAg";
    $document_id[] = "BQADAgADGwADf0p-EC4SbRhjYqwbAg";
    $document_id[] = "BQADAgADHAADf0p-EDzOoI4PmScRAg";
    $document_id[] = "BQADAgADHQADf0p-EEguK_QgvpkkAg";
    $document_id[] = "BQADAgADHgADf0p-EGgMWUFbwMylAg";
    $document_id[] = "BQADAgADHwADf0p-EKtrAZ-qY4JIAg";

    

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
