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
        <form method="POST" action="gravarmanutencao.php">
            <div class="single-input">
                <input type="text" id="servicox" name="servicox" class="input" required>
                <label for="servicox" class="label">Nome do serviço</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="tecnicox" class="input" required>
                <label for="tecnicox" class="label">Nome do técnico</label>
            </div>
            <div class="single-input">
                <input type="text" id="datax" name="datax" class="input" style="margin-bottom: 10px;" required>
                <label for="datax" class="label" style="margin-bottom: 16px;">Data da manutenção</label>
            </div>
            <input class="botao" type="submit" value="Enviar">
        </form>
        <a href="consultacliente.php">
            <input class="botao" type="submit" value="Consultar">
        </a>
    </div>
    <script>
        const data = document.querySelector('#datax')

        data.addEventListener('keypress', () => {
            datalength = data.value.length

            if (datalength === 2 || datalength === 5){
                data.value += '/'
            } 
        })
    </script>
</body>
</html>