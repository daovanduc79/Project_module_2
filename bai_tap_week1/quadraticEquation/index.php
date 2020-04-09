<?php
include 'QuadraticEquation.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $c = $_POST["num3"];

    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    $delta = $quadraticEquation->getDiscriminant();

    if ($delta > 0) {
        echo "phương trình có hai ngiệm : " . "<br>" . "x1 = " . $quadraticEquation->getRoot1() . "<br>"
            . " x2 = " . $quadraticEquation->getRoot2();
    } elseif ($delta == 0) {
        echo "phương trình có nghiệm x = " . $quadraticEquation->getRoot();
    } else {
        echo "phương trình vô nghiệm ";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phương trình bậc hai</title>
</head>
<body>
<form method="post">
    <h2>QuadraticEquation</h2>
    Nhập a :
    <input type="number" name="num1">
    Nhập b :
    <input type="number" name="num2">
    Nhập c :
    <input type="number" name="num3">
    <button type="submit">CAL</button>
</form>
</body>
</html>
