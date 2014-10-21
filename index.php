<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
include_once('/topo.php');

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

print_r($rota);

?>