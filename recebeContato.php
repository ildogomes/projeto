<?php 
 include_once "topo.php"; 
 require_once 'conexao.php';
?>
    <div id="content">
        <?php
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $assunto = trim($_POST['assunto']);
            $mensagem = trim($_POST['mensagem']);
						
				
						$sql = "INSERT INTO contato(nome,email,assunto, mensagem) VALUES (:nome, :email,:assunto,:mensagem)";
						$stmt = $conexao->prepare($sql);
						$stmt->bindParam(':nome', $nome);
						$stmt->bindParam(':email', $email);
						$stmt->bindParam(':assunto', $assunto);
						$stmt->bindParam(':mensagem', $mensagem);
						$stmt->execute();

unset($conexao);
 

            echo "<div align='center'>
                    <form class='form-signin'>
                    <h4 class='form-signin-heading'>Dados enviados com sucesso, abaixo os dados enviados. </h4>
                    <fieldset>
                        <p>$nome</p>
                        <p>$email</p
                        <p>$assunto</p>
                        <p>$mensagem</p>
                    </fieldset>
                    </form>
                </div> ";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"10; URL='contato.php'\">";
        ?>
    </div>

<?php include_once "footer.php"; ?>