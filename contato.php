<?php include_once('topo.php'); ?>
    <script language="javascript">
        function valida() {
            ok = nomex();
            if (ok)

                document.dados.submit();
        }


        function nomex() {
            with (document.dados)
                if (document.dados.nome.value < 2) {
                    window.alert(" É obrigatório o preenchimento do Nome. ");
                    nome.focus();
                    return false;
                }
                else
                    return true;
        }
    </script>

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
                        <input type="button" value="Enviar" name="btn_enviar" class="btn btn-success"
                               onClick="valida()">
                    </div>
                </td>
            </tr>
        </table>
    </form>
<?php include_once('footer.php'); ?>