<?php
    include "conectabancosplash.php";

    $nome = $_POST ['nomex']; 
    $cpf = $_POST ['cpfx'];
    $telefone =  $_POST ['telefonex'];
    $ingresso = $_POST ['ingressox'];

    $query = mysqli_query($conexao, "INSERT INTO bilheteria (bil_nome, bil_cpf, bil_telefone, bil_ingresso) VALUES ('$nome', '$cpf','$telefone', '$ingresso');");
    mysqli_close($conexao);
?>
<html>
    <h1>GRAVADO NO SISTEMA!</h1>
    <a href="paginainicial.php">
        <button>Voltar a pagina inicial</button>
    </a>
</html>