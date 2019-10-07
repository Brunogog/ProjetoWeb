<?php

include("pessoa.php");

$pessoa1 = new pessoa("Bruno",21,"01856131602");
$pessoa2 = new pessoa("Pedro",18,"01856132684");
//echo "Valor antigo: " .$pessoa2->getIdade();
//$pessoa2->setIdade(19);
//echo "<br>Valor novo: " .$pessoa2->getIdade();
//$json = json_encode($pessoa2);
echo $pessoa2;
echo "<br>";
//echo $json;
//var_dump($pessoa1);
//var_dump($pessoa2);
?>