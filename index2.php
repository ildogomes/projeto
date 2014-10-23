<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
include_once( '/topo.php');

   define('BASE_URL', "http://" . $_SERVER['HTTP_HOST']);
   $url = BASE_URL . $_SERVER['REQUEST_URI'];


   $rota = parse_url($url);
    $path = ($rota['path'] == '/' ? 'home' : ltrim($rota['path'], '/'));
    $path_dados = explode('/', $path);
	
	 echo "<pre>";
	print_r($path_dados);
	
	
	 if(empty($path_dados[1])){
        include_once( $path_dados[0]."/home.php");
    }


include_once('/footer.php');
