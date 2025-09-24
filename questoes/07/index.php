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
        <h2>Questão 07: Fatorial</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar um número -->
        <form method="post" action="">
            <label for="numero">Digite um número inteiro:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <button type="submit">Calcular Fatorial</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<p>O fatorial de <strong>$numero</strong> é <strong>$fatorial</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
