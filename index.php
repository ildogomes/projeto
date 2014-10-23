<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
include_once( __DIR__.'/topo.php');

function rotas()
{
    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $paginas	= array('home', 'empresa', 'produtos', 'servicos', 'contato');
    $explode = $rota['path'];
  

  
    $explode = explode('/', $explode);
	

    if(empty($explode[1])){
        include_once( __DIR__."/home.php");
    }elseif(isset($explode[1]) && in_array($explode[1], $paginas)){
        include_once(__DIR__."/{$explode[1]}.php");
    }elseif(isset($explode[1]) && $explode[1] != $paginas){
        include_once( __DIR__."/naoexiste.php");
    }else{
        include_once( __DIR__."/home.php");
    }
}	 

rotas();


	

include_once( __DIR__.'/footer.php');

?>