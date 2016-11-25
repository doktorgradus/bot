<?php
require 'libs/rb.php';
echo "DB incluaded in vps7 <br>";
     R::setup( 'mysql:host=vps7.exileed.com;dbname=bot_db',
        'root', '123' ); //for both mysql or mariaDB
?>
