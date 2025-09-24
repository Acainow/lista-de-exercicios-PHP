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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar as horas -->
        <form method="post" action="">
            <label for="horas">Digite a quantidade de horas:</label>
            <input type="number" name="horas" id="horas" step="0.01" min="0" required>
            <button type="submit">Calcular</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['horas'])) {
            $horas = $_POST['horas'];
            $minutos = $horas * 60;
            $segundos = $horas * 3600;

            echo "<p><strong>$horas hora(s)</strong> equivalem a <strong>$minutos minuto(s)</strong> ou <strong>$segundos segundo(s)</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
