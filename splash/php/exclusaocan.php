<?php
    include "conectabancosplash.php";

    $id = $_GET["id"];

    $query = mysqli_query($conexao, "DELETE FROM bilheteria WHERE bil_cod = '$id'") or die ("erro ao excluir");

    echo ("<h3>DELETADO COM SUCESSO! <3</h3>");
?>