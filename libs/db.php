<?php
require 'libs/rb.php';
echo "DB inluaded ".__FILE__."<br>";
    R::setup( 'mysql:host=127.0.0.1;dbname=bot_db',
        'root', '123' ); //for both mysql or mariaDB
?>
