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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar a idade -->
        <form method="post" action="">
            <label for="idade">Digite sua idade em anos:</label>
            <input type="number" name="idade" id="idade" min="0" required>
            <button type="submit">Calcular Dias de Vida</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['idade'])) {
            $idade = $_POST['idade'];
            $dias = $idade * 365;
            echo "<p>Uma pessoa com <strong>$idade anos</strong> viveu aproximadamente <strong>$dias dias</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
