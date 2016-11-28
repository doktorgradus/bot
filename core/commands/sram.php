<?php
$inline_button1 = array("text"=>"👍","callback_data" =>'/sramup');
$inline_button2 = array("text"=>"👎","callback_data" =>'/sramdown');
$inline_keyboard = [[$inline_button1,$inline_button2]];
$keyboard=array("inline_keyboard"=>$inline_keyboard);
$replyMarkup = json_encode($keyboard);
$rand = rand(1, 300);
$sram_pars = file_get_contents('http://sramu.net/index_'.$rand.'.html'); 
preg_match_all('/><p>(.*?)<\/p><\/td><\/tr><tr>/', $sram_pars, $sram); 
$i = rand(0, count($sram[1]) - 1); 
$sram = iconv('windows-1251','utf-8',$sram[1][$i]); 
$text = $sram; 
    sendMessage($chat_id,$text."\n Page № <b>{$rand}</b>",$msgid,$replyMarkup);
    ?>