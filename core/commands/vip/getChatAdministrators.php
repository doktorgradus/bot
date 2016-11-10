<?php
if(in_array($user_id_group, $vip_users)){
	        	if (preg_match_all("/(?<![\w\d])(getChatAdministrators [a-z]+)(?![\w\d])/uim",$message_preg, $mathes)) {
	   
		$message = explode(" ", $message);
	    $output = json_decode(file_get_contents("https://api.telegram.org/bot".$access_token."/getChatAdministrators?chat_id=@".$message[1]), TRUE);
	    // sendMessage($chat_id,"admin list {$output}");
	    // sendMessage($chat_id,"adminlist.".$output["result"]["user"]["username"]);
	    foreach ($output["result"] as $human) {
	    	sendMessage($chat_id,"username: " .'https://telegram.me/' . $human["user"]["username"].' '.'ФИО: '.$human["user"]["first_name"].' '.$human["user"]["last_name"]. " ID: " .$human["user"]["id"]. " Status: " .$human["status"]);
	    }
	    
}
}

?>
