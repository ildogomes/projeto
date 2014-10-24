<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
include_once( __DIR__.'/topo.php');
	

function rotas(){ 
		
		$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $paginas	= array("/"=>'home', "empresa"=>'empresa', 'produtos', 'servicos','contato');
      
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
		
		if($conteudo['nome'] == 'contato'):
		?>
<form name="dados" method="post" action="recebeContato.php">
        <br/>
        <h4 class="">Contato</h4>

        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" id="nome" name="nome" class="input-xlarge" size="60"></td>
            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type="text" id="email" name="email" class="input-xlarge" size="60"></td>
            </tr>

            <tr>
                <td>Assunto:</td>
                <td><input type="text" id="assunto" name="assunto" class="input-xlarge" size="60"></td>
            </tr>

            <tr>
                <td> Mensagem:</td>
                <td><textarea id="mensagem" name="mensagem" cols="85" rows="5" class="input-xlarge"></textarea></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" value="Enviar" name="btn_enviar" class="btn btn-success"
                               onClick="valida()">
                    </div>
                </td>
            </tr>
        </table>
    </form>
	<?php
	else:
	echo "<strong>".$conteudo['conteudo']."</strong><br><br>";
	
		endif;

}else{
		echo "<strong>Pagina nao existe</strong><br><br>";
}	

include_once( __DIR__.'/footer.php');

?>