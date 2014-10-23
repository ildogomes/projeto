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
$stmt = $conexao->prepare($criatabela);
$stmt->execute();

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



