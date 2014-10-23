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
    if(empty($explode[2])){
        include_once( __DIR__."/home.php");
    }elseif(isset($explode[2]) && in_array($explode[2], $paginas)){
        include_once(__DIR__."/{$explode[2]}.php");
    }elseif(isset($explode[2]) && $explode[2] != $paginas){
        include_once( __DIR__."/naoexiste.php");
    }else{
        include_once( __DIR__."/home.php");
    }
}
//echo"<pre>";
//print_r($explode);


rotas();



include_once( __DIR__.'/footer.php');
//echo "é este alterado";
?>