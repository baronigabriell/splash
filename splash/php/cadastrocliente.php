<html> 
<head> 
<title> Cadastro cliente</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
</head>
<header>
<a href="paginainicial.php">
    <img src="../img/splash.png" alt="logotipo do splash" id="splash" style="margin-top: 0;">    
</a>
<nav>
    <a href="paginainicial.php"><p class="text-nav">HOME</p></a>
    <a href="#cards"><p class="text-nav">SOBRE O BRINQUEDO</p></a>
    <a href="#contato"><p class="text-nav">CONTATO</p></a>
</nav>
</header>
<body> 
    <form method = "POST" action = "gravarcliente.php"></form>
        <label for="nome">Nome</label>
        <br>
        <input type="text" name="nomex"></input>
        <br>
        <label for="cpf">CPF</label>
        <br>
        <input type="text" name="cpfx"></input>
        <br>
        <label for="telefone">Telefone</label>
        <br>
        <input type="text" name="telefonex"></input>
        <br>
        <label for="ingresso">Meia ou inteira</label>
        <br>
        <input type="text" name="ingressox"></input>
        <br>
        <input type=submit value="Gravar"></input>
        <br>
    </form>
    <a href = "consultacliente.php">CONSULTAR</a>
</body>
</html>