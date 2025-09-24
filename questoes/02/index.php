<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 02: Metros para Centímetros</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar o valor em metros -->
        <form method="post" action="">
            <label for="metros">Digite o valor em metros:</label>
            <input type="number" name="metros" id="metros" step="0.01" required>
            <button type="submit">Converter</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['metros'])) {
            $metros = $_POST['metros'];
            $centimetros = $metros * 100;
            echo "<p><strong>$metros</strong> metro(s) equivalem a <strong>$centimetros</strong> centímetros.</p>";
        }
        ?>
    </main>
</body>

</html>
