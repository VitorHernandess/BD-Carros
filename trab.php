<?php

/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_hernandes";
$password = "6RGB@RJ4bJ~7";
$database = "basetestesrv_hernandes";

$conexao = myaqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("Falhou a conexão" .mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//checa se a conexão com o banco de dados foi um sucesso.

?>


