<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Salário Líquido</title>
</head>
<body>
    <h1>Calculadora de Salário Líquido</h1>
    <form action="calcular_salario.php" method="post">
        <label for="salario_bruto">Salário Bruto:</label>
        <input type="number" step="0.01" id="salario_bruto" name="salario_bruto" required><br><br>

        <label for="inss">Desconto do INSS:</label>
        <input type="number" step="0.01" id="inss" name="inss" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>