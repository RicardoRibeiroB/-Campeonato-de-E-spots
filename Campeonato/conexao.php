<?php 

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    echo "falha na conexão com banco de dados";
}
?>