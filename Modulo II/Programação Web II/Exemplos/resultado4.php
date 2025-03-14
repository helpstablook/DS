<?php
$quantidade = $_POST['quantidade'];
$preco_unitario = ($quantidade < 13) ? 1.30 : 1.00;
$total = $quantidade * $preco_unitario;

echo "<h1>Valor Total da Compra</h1>";
echo "<p>Quantidade de Maçãs: $quantidade</p>";
echo "<p>Preço Unitário: R$ " . number_format($preco_unitario, 2, ',', '.') . "</p>";
echo "<p>Total: R$ " . number_format($total, 2, ',', '.') . "</p>";
?>