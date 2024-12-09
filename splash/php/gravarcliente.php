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
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
<a href="paginainicial.php">
    <img src="../img/splash.png" alt="logotipo do splash" id="splash" style="font-size: 0;">    
</a>
<nav>
    <a href="paginainicial.php"><p class="text-nav">HOME</p></a>
    <a href="paginainicial.php#cards"><p class="text-nav">INFORMAÇÕES ESSENCIAIS</p></a>
    <a href="paginainicial.php#contato"><p class="text-nav">CONTATO</p></a>
</nav>
</header>
<body>
    <main>    
        <h1 style="color: #00296b;">Gravado no sistema!</h1>
        <br>
        <a href="paginainicial.php" style="display: flex; justify-content: center; text-decoration: none; width: 15%;">
            <button>Voltar a pagina inicial</button>
        </a>
    </main>
</body>
<style>
    main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    button{
        font-family: poppins;
        font-size: 15px;
        width: 100%;
        height: 180%;
        border-radius: 35px;
        background-color: #00296b;
        color: white;
        margin: 0 0 0;
    }
    button:hover{
        background-color: white;
        border: 2px solid #00296b;
        color: #00296b;
        cursor: pointer;
        transition: all 0.2s ease-in;
    }
    button:not(:hover){
        background-color: #00296b;
        color: white;
        transition: all 0.2s ease-in;
    }
    button:active{
        transform: scale(0.9);
    }
</style>
</html>