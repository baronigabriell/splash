<?php
include "conectabancosplash.php";

$busca = ''; // Captura o CPF enviado
?>

<html>
<head>
    <title>Cadastro cliente</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    <a href="paginainicial.php">
        <img src="../img/splash.png" alt="logotipo do splash" id="splash" style="margin-top: 0;">
    </a>
    <nav>
        <a href="paginainicial.php"><p class="text-nav">HOME</p></a>
        <a href="paginainicial.php#cards"><p class="text-nav">SOBRE O BRINQUEDO</p></a>
        <a href="paginainicial.php#contato"><p class="text-nav">CONTATO</p></a>
    </nav>
</header>
<body>
    <div>
        <form method="POST" action="" style="width: 100%; display: flex; justify-content: center;">
            <div class="box" style="width: 20%; bottom: 0;">
                <div class="single-input">
                    <input type="text" id="cpf" name="cpfx" class="input" value="<?= htmlspecialchars($busca) ?>" required>
                    <label for="nomex" class="label">CPF do cliente</label>
                    <button type="submit" class="pesquisar">
                        <img class="lupa" src="../img/lupa.png" alt="lupa">
                    </button>
                </div>

                <?php if (!empty($busca)): ?>
                    <div class="resultado">
                        <p>Resultado para CPF: <?= htmlspecialchars($busca) ?></p>
                        <table>
                            <tr>
                                <th>CPF</th>
                                <th>Ação</th>
                            </tr>
                            <?php
                            $query = mysqli_query($conexao, "SELECT bil_cod, bil_cpf FROM bilheteria WHERE bil_cpf LIKE \"%$busca%\" GROUP BY 1");
                            while ($saida = mysqli_fetch_array($query)) {
                                $codigo = $saida[0];
                                $cpf = $saida[1];
                                echo "<tr>";
                                echo "<td class='titulo'>" . htmlspecialchars($cpf) . "</td>";
                                echo "<td id='excluir'><a href='exclusao_ele.php?id=" . $codigo . "'>OK</a></td>";
                                echo "<td id='alterar'><a href='alteracao_ele.php?id=" . $codigo . "'>OK</a></td>";
                                echo "</tr>";
                            }
                            mysqli_close($conexao);
                            ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
</body>
<script>
    const cpf = document.querySelector('#cpf');

    cpf.addEventListener('keypress', () => {
        cpflength = cpf.value.length;

        if (cpflength === 3 || cpflength === 7) {
            cpf.value += '.';
        } else if (cpflength === 11) {
            cpf.value += '-';
        }
    });
</script>
<style>
    body{
        position: relative;
    }
    form{
        margin: 0 0 0;
    }
    div.single-input{
        position: relative;
    }
    div.single-input .input{
        background-color: #f3edf3;
        border-bottom: 2px solid black;
        width: 100%;
        color: black;
        position: relative; 
    }
    div.single-input .label{
        color: black;
    }
    .box {
        justify-content: space-between;
        background-color: #f3edf3;
        padding: 30px 45px;
        border-radius: 40px 40px 0 0;
        height: 600px;
        align-self: flex-start;
        position: absolute;
        bottom: 0;
    }
    form .pesquisar {
        position: absolute;
        right: 0;
        width: 20px;
        height: 20px;
        padding: 0 0;
        background: transparent;
        border: none;
        cursor: pointer;
        z-index: 1;
        margin: 0 0 0;
    }

    .lupa {
        max-width: 20px;
        max-height: 20px;
        width: auto;
        height: auto;
    }
    .resultado {
        margin-top: 20px;
        padding: 10px;
        background-color: #e6e6e6;
        border-radius: 10px;
        color: black;
        text-align: center;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    table th, table td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: center;
    }

    table th {
        background-color: #f3edf3;
    }
</style>
</html>