<?php
        if ($user_name_group == 'oneerror') {
            sendMessage($chat_id,"Как скажешь..",$msgid);
            LeaveChat($chat_id);
        }else{
            sendMessage($chat_id,"Ага...щас",$msgid);
        }
?>