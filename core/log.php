<?php 
$log = R::dispense('log');
$log->username = $user_name_group;
$log->first_name = $user_first_name_group;
$log->user_id_group = $user_id_group;
$log->date = $date;
$log->message = $message;
R::store( $log );
?>