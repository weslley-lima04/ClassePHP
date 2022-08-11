<?php 


include_once "Produto.php";

$produto = new Produto();
$produto2 = new Produto();

$produto->codigo = 4500;

$produto->descricao = "CD antiga banda";

$produto2->codigo = 4505;

$produto2->descricao = "CD nova banda";



$produto->ImprimeEtiqueta();
echo "<br/>";
$produto2->ImprimeEtiqueta();


 ?>