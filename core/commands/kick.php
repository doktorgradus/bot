<?php
if (is_numeric($message)) {
	sendMessage($chat_id,"Кикнули человека с id {$message}",$msgid);
}