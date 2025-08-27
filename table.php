<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="color:rgba(105, 68, 23, 1)"> <i><b>My First PHP Program</b></i></h1>
    <h3 style="color:rgba(105, 68, 23, 1)">Dynamic Table</h3>
    <hr>
</body>
</html>

<?php
    $products = array(
        array("name" => "Product A", "price" => 10.50, "stock" => 12),
        array("name" => "Product B", "price" => 5.60, "stock" => 7),
        array("name" => "Product C", "price" => 7.00, "stock" => 5),
        array("name" => "Product D", "price" => 6.00, "stock" => 3),
        array("name" => "Product E", "price" => 5.00, "stock" => 18),
        array("name" => "Product F", "price" => 9.00, "stock" => 20)
    );
?>

<table bourder="1">
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

    <?php
        $no = 1;
        foreach ($products as $p) {
            $style = ($p["stock"] < 10) ? 'style="color:red;"' : '';
    ?>
        <tr <?php echo $style; ?>>
            <td><?= $no ?></td>
            <td><?= $p["name"] ?></td>
            <td><?= $p["price"] ?></td>
            <td><?= $p["stock"] ?></td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>




