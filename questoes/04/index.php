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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>
        <!-- Formulário para o usuário informar área da parede -->
        <form method="post" action="">
            <label for="area">Digite a área da parede em metros quadrados:</label>
            <input type="number" name="area" id="area" step="0.01" required>
            <button type="submit">Calcular Tinta</button>
        </form>

        <!-- Resultado em PHP -->
        <?php
        if (isset($_POST['area'])) {
            $area = $_POST['area'];
            $rendimento = 3; // 1 litro pinta 3 m²
            $litros = $area / $rendimento;
            $litros = ceil($litros); // arredonda para cima para não faltar tinta
            echo "<p>Para pintar <strong>$area m²</strong>, você precisará de <strong>$litros litro(s)</strong> de tinta.</p>";
        }
        ?>
    </main>
</body>

</html>
