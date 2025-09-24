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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar o número máximo -->
        <form method="post" action="">
            <label for="maximo">Digite o número máximo:</label>
            <input type="number" name="maximo" id="maximo" min="1" required>
            <button type="submit">Mostrar Ímpares</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['maximo'])) {
            $maximo = $_POST['maximo'];
            $impares = [];

            for ($i = 1; $i <= $maximo; $i++) {
                if ($i % 2 != 0) {
                    $impares[] = $i;
                }
            }

            echo "<p>Os números ímpares de 1 até <strong>$maximo</strong> são: <strong>" . implode(", ", $impares) . "</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
