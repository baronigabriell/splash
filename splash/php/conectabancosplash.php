<?php 
    $sevidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $bancoDados = "cadastro";

    $conexao = mysqli_connect($sevidor,$usuario, $senha, $bancoDados) or die ("problemas para conectar");

?>
