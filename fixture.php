<?php
require_once 'conexao.php';

$sqlTruncade = "TRUNCATE TABLE paginas";
$stmt = $conexao->prepare($sqlTruncade);
$stmt->execute();

$sqlHome = "INSERT INTO paginas(nome, conteudo) VALUES ('home', 'Conteudo da pagina Home')";
$stmt = $conexao->prepare($sqlHome);
$stmt->execute();

$sqlEmpresa = "INSERT INTO paginas(nome, conteudo) VALUES ('empresa', 'Conteudo da pagina Empresa')";
$stmt = $conexao->prepare($sqlEmpresa);
$stmt->execute();

$sqlProduto = "INSERT INTO paginas(nome, conteudo) VALUES ('produtos', 'Conteudo da pagina Produtos')";
$stmt = $conexao->prepare($sqlProduto);
$stmt->execute();

$sqlServicos = "INSERT INTO paginas(nome, conteudo) VALUES ('servicos', 'Conteudo da pagina Servicos')";
$stmt = $conexao->prepare($sqlServicos);
$stmt->execute();



