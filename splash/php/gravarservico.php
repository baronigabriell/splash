<?php
    include "conectabancosplash.php";

    $servico = $_POST['servicox'];

    $query = mysqli_query($conexao, "INSERT INTO servico (ser_nome) VALUES ('$servico');");
    mysqli_close($conexao);
?>
<html>
    <h1>GRAVADO NO SISTEMA!</h1>
    <a href="paginainicial.php">
        <button>Voltar à página inicial</button>
    </a>
</html>