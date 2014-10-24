<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'code_foundation';

try {
				$conexao = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
  

?> 