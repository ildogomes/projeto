<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'code_foundation';

try {
				$conexao = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
  

?> 