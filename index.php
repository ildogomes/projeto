<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
include_once( __DIR__.'/topo.php');





	

function rotas(){ 
		
		$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $paginas	= array("/"=>'home', "empresa"=>'empresa', 'produtos', 'servicos');
      
    $explode = $rota['path'];  
    $explode = explode('/', $explode);
		
		
    if(empty($explode[1])){
			return("home");
    }elseif(isset($explode[1]) && in_array($explode[1], $paginas)){
			return("{$explode[1]}");
    }elseif(isset($explode[1]) && $explode[1] != $paginas){
			return("naoexiste");
    }else{
			return ( "home");
    }
}	 

//rotas();
require_once 'conexao.php';
$sql = "SELECT * FROM paginas WHERE nome =:nome";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("nome",rotas());
$stmt->execute();

$conteudo = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() > 0) {
echo "<strong>".$conteudo['conteudo']."</strong><br><br>";
}else{
		echo "<strong>Pagina nao existe</strong><br><br>";
}	

include_once( __DIR__.'/footer.php');

?>