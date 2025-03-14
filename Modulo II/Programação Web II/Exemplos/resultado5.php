<?php
$salario_bruto = $_POST['salario_bruto'];
$inss = $_POST['inss'];

$salario_base = $salario_bruto - $inss;

if ($salario_base <= 3000) {
    $imposto_renda = $salario_base * 0.15;
} else {
    $imposto_renda = $salario_base * 0.27;
}

$salario_liquido = $salario_base - $imposto_renda;

echo "<h1>Salário Líquido</h1>";
echo "<p>Salário Bruto: R$ " . number_format($salario_bruto, 2, ',', '.') . "</p>";
echo "<p>Desconto do INSS: R$ " . number_format($inss, 2, ',', '.') . "</p>";
echo "<p>Salário Base: R$ " . number_format($salario_base, 2, ',', '.') . "</p>";
echo "<p>Imposto de Renda: R$ " . number_format($imposto_renda, 2, ',', '.') . "</p>";
echo "<p>Salário Líquido: R$ " . number_format($salario_liquido, 2, ',', '.') . "</p>";
?>