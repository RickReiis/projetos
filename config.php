<?php
// verifica a conecção
$conec = mysql_connect("localhost","root","") or die("Não foi possivel conectar com o servidor de dados");
//Conectar em uma base de dados
mysql_select_db("tipi_j",$conec) or die("Banco de dados não encontrado!");
?>