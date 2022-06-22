<?php
declare(strict_types = 1);   //variable can only take value accourding to data type
$candy = [
'Toffee' => ['price' => 3, 'stock' => 12],    // list of the stock items
'Mints' => ['price' => 2, 'stock' => 26],
'Fudge' => ['price' => 4, 'stock' => 8],
];
$tax = 20;
function get_reorder_message(int $stock): string    // the function with return type string 
{
return ($stock < 10) ? 'Yes' : 'No';
}
function get_total_value(float $price, int $quantity): float  // the function with return type float 
{

return $price * $quantity;   
}
function get_tax_due(float $price, int $quantity, int $tax = 0): float  // the function with return type float
{
return ($price * $quantity) * ($tax / 100);     // calculate the due tex of an item 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Functions Example</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Stock Control</h2>
<table>
<tr>
<th>Product</th><th>Stock</th><th>Re-order</th><th>Total value</th><th>Tax
due</th>
</tr>
<?php foreach ($candy as $product => $data) /*For each loop  array candy value assign to product*/  { ?>    
<tr>
<td><?= $product ?></td>
<td><?= $data['stock'] ?></td>
<td><?= get_reorder_message($data['stock']) /*Getting the yes or no message of item according to stock */?></td>    
<td>$<?= get_total_value($data['price'], $data['stock'])  /*Getting value by multiplying the quantity with price of an item*/  ?></td>
<td>$<?= get_tax_due($data['price'], $data['stock'], $tax) /*Calulating due tax on any item */?></td>
</tr>
<?php } ?>
</table>
</body>
</html>


