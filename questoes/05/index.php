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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar três números -->
        <form method="post" action="">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2" required>

            <label for="num3">Digite o terceiro número:</label>
            <input type="number" name="num3" id="num3" required>

            <button type="submit">Verificar Maior</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            $maior = max($num1, $num2, $num3);

            echo "<p>Entre os números <strong>$num1</strong>, <strong>$num2</strong> e <strong>$num3</strong>, o maior é <strong>$maior</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
