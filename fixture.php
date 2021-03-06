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

$sqlContato = "INSERT INTO paginas(nome, conteudo) VALUES ('contato', '')";
$stmt7 = $conexao->prepare($sqlContato);
$stmt7->execute();


$sqlDropContato = "DROP TABLE IF EXISTS contato";
$stmt8 = $conexao->prepare($sqlDropContato);
$stmt8->execute();


$criaTabelaContato = "CREATE TABLE IF NOT EXISTS contato (  `idcontato` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `assunto` VARCHAR(500) NULL,
  `mensagem` VARCHAR(5000) NULL,
  PRIMARY KEY (`idcontato`));";
$stmt9 = $conexao->prepare($criaTabelaContato);
$stmt9->execute();