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
        <h2>Questão 03: Horas Trabalhadas</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar horas trabalhadas e valor da hora -->
        <form method="post" action="">
            <label for="horas">Digite a quantidade de horas trabalhadas:</label>
            <input type="number" name="horas" id="horas" step="0.01" required>

            <label for="valor">Digite o valor da hora:</label>
            <input type="number" name="valor" id="valor" step="0.01" required>

            <button type="submit">Calcular Pagamento</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['horas']) && isset($_POST['valor'])) {
            $horas = $_POST['horas'];
            $valor = $_POST['valor'];
            $total = $horas * $valor;
            echo "<p>O pagamento total por <strong>$horas</strong> hora(s) trabalhadas a <strong>R$ $valor</strong> por hora é <strong>R$ $total</strong>.</p>";
        }
        ?>
    </main>
</body>

</html>
