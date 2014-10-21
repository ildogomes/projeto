<?php include_once "topo.php"; ?>

    <div id="content">
        <?php
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $assunto = trim($_POST['assunto']);
            $mensagem = trim($_POST['mensagem']);


            echo "<div align='center'>
                    <form class='form-signin'>
                    <h4 class='form-signin-heading'>Dados enviados com sucesso, abaixo os dados enviados. </h4>
                    <fieldset>
                        <p>$nome</p><br>
                        <p>$email</p><br>
                        <p>$assunto</p><br>
                        <p>$mensagem</p><br>
                    </fieldset>
                    </form>
                </div> ";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"10; URL='contato.php'\">";
        ?>
    </div>

<?php include_once "footer.php"; ?>