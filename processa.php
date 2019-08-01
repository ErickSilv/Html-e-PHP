<?php

/* criação de variáveis para receber o conteudo do formulário */

$nome = $_post ['txtNome'];
$end = $_post ['txtEnd'];
$data = $_post ['txtData'];
$cidade = $_post ['sltCidade'];


/* Exibindo o conteúdo das variáveis com comando echo */

echo "Nome do Usuário: ".$nome."<br>";
echo "Endereço do usuário: ".$end."<br>";
echo "Aniversário: ".$data."<br>";
echo "Cidade: ".$cidade."<br>";

?>
