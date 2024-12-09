<html> 
<head> 
<title> Cadastro cliente</title>
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
    <div class="form" style="position: absolute; top: 58%; left: 50%; transform: translate(-50%,-50%);">
        <h1>Cadastro de manutenção</h1>
        <form method="POST" action="gravarcliente.php">
            <div class="single-input">
                <input type="text" id="nomex" name="nomex" class="input" required>
                <label for="nomex" class="label">Nome</label>
            </div>
            <div class="single-input">
                <input type="text" id="cpfx" name="cpfx" class="input" required>
                <label for="cpfx" class="label">CPF</label>
            </div>
            <div class="single-input">
                <input type="text" id="telefonex" name="telefonex" class="input" style="margin-bottom: 16px;" required>
                <label for="telefonex" class="label" style="margin-bottom: 16px;">Telefone</label>
            </div>
            <div class="single-input">
                <label for="ingressox" class="label" >Meia ou inteira</label>
            </div>
            <div class="custom-radio">
                <input type="radio" id="radio-1" name="tabs">
                <label class="radio-label" for="radio-1">
                <div class="radio-circle"></div>
                <span class="radio-text">Meia</span>
                </label>
                <input type="radio" id="radio-2" name="tabs">
                <label class="radio-label" for="radio-2">
                <div class="radio-circle"></div>
                <span class="radio-text">Inteira</span>
                </label>
            </div>
            <input class="botao" type="submit" value="Enviar">
        </form>
        <a href="consultacliente.php">
            <input class="botao" type="submit" value="Consultar">
        </a>
    </div>
</body>
</html>