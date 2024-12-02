<html> 
    <head> 
    <title> Cadastro cliente</title>
    </head>
    <body> 
        <form method = "POST" action = "gravarcliente.php">
            <table> 
                <tr> 
                        <td> Nome </td>
                        <td> CPF </td>
                        <td> Telefone</td>
                        <td>Meia ou inteira</td>
                        <td> GRAVAR </td>
                </tr>
                <tr> 
                        <td> <input type="text" name="nomex"></input> </td>
                        <td> <input type="text" name="cpfx"></input> </td>
                        <td> <input type="text" name="telefonex"></input> </td>
                        <td><input type="text" name="ingressox"></input></td>
                        <td> <input type=submit value="#"></input> </td>
                </tr>
            </table>
        </form>
        <a href = "consultacliente.php">CONSULTAR</a>
    </body>
</html>