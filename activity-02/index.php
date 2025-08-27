<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, from Marc Roland D. De Zena!</h1>
</body>
</html>

<?php
    echo "Hello, World!";
?> 

<br>
<br>

<h2>Basic Arithmetic Operations</h2>
<?php
    $x = 20;
    $y =5;
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $equation = $x / $y;


    echo "the sum is $sum<br>";
    echo "the difference is $difference<br>";
    echo "the product is $product<br>";
    echo "the equation is $equation<br>";
?>

<br>
<br>

<h2>Conditional Statements</h2>
<?php
    if($x % $y == 0){
        echo "$x is a factor of $y";
    }else{
        echo "$x is not a factor of $y";
    }
?>

<br>
<br>

<h2>Loops</h2>
<?php
echo "mutiples of 3 and 5 from 1 to 100 are: <br>";
echo "---- mutiples of 3 ----<br>";
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
        echo "$i <br>";
        }
    }

    echo "---- mutiples of 5 ----<br>";
     for($i = 1; $i <= 100; $i++){
        if($i % 5 == 0){
        echo "$i <br>";
        }
    }
?>

<br>

<h2>Arrays</h2>
<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    $products[1] = "Product D";
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p){
        echo "$p <br>";
    }
?>

<br>
<br>

<?php
$products = array(
    array("name" => "Product A", "price" => 10.50, "stock" => 12),
    array("name" => "Product B", "price" => 5.60, "stock" => 7),
    array("name" => "Product C", "price" => 7.00, "stock" => 5)
);

foreach($products as $p){
    echo $p["name"] . " is " . $p["price"] . " pesos <br>";
}
?>