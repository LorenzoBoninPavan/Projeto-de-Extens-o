<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario com Redirecionamento</title>
    <script>
        function redirecionar(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            
            // Opcional: Captura o valor da data (apenas para exibir no console)
            const data = document.getElementById("date").value;
            console.log("Data enviada:", data);

            // Redireciona para outra página
            window.location.href = "index.php"; // Substitua pelo nome da página de destino
        }
    </script>
</head>
<body>
    <h1>Formulário de Data</h1>
    <form id="dateForm" onsubmit="redirecionar(event)">
    <table>
            <tr>
                <td><input type="email" id="email" name="email"  placeholder="TAG APLICAVÉL"></td>
                <td><input type="file" id="photo" name="photo" accept="image/*"></td>
            </tr>
            <tr>
                <td><input type="text" id="name" name="name"  placeholder="Série"></td>
            </tr>
            <tr>
                <td><input type="date" id="date" name="date" ></td>
            </tr>
            <tr>
                <td><input type="text" id="validacao" name="valicao"  placeholder="Validade de Inspeção"></td>
            </tr>
            <tr>
                <td><input type="file" id="photo" name="photo" accept="image/*"></td>
                <td><input type="file" id="photo" name="photo" accept="image/*"></td>
            </tr>
            <tr>
            <td><input type="textarea" id="observacao" name="observacao" placeholder="Observação"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="reset">Limpar</button>
                </td>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>