<?php
require 'libs/rb.php';
echo "DB inluaded <br>";
    R::setup( 'mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_8d1979a47f79417',
        'b578e4cd9c58c1', '6b62dfab' ); //for both mysql or mariaDB
?>
