<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'loginsis';

$connect = mysqli_connect($servername, $username, $password, $dbname );

if(mysqli_connect_error()):
    echo "falha na conexao".mysqli_connect_error();
endif;
