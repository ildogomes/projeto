<?php
require_once 'conexao.php';


$sqlDrop = "DROP TABLE IF EXISTS paginas";
$stmt = $conexao->prepare($sqlDrop);
$stmt->execute();


$criatabela = "CREATE TABLE IF NOT EXISTS paginas (  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
$stmt1 = $conexao->prepare($criatabela);
$stmt1->execute();

$sqlTruncade = "TRUNCATE TABLE paginas";
$stmt2 = $conexao->prepare($sqlTruncade);
$stmt2->execute();

$sqlHome = "INSERT INTO paginas(nome, conteudo) VALUES ('home', 'Conteudo da pagina Home')";
$stmt3 = $conexao->prepare($sqlHome);
$stmt3->execute();

$sqlEmpresa = "INSERT INTO paginas(nome, conteudo) VALUES ('empresa', 'Conteudo da pagina Empresa')";
$stmt4 = $conexao->prepare($sqlEmpresa);
$stmt4->execute();

$sqlProduto = "INSERT INTO paginas(nome, conteudo) VALUES ('produtos', 'Conteudo da pagina Produtos')";
$stmt5 = $conexao->prepare($sqlProduto);
$stmt5->execute();

$sqlServicos = "INSERT INTO paginas(nome, conteudo) VALUES ('servicos', 'Conteudo da pagina Servicos')";
$stmt6 = $conexao->prepare($sqlServicos);
$stmt6->execute();