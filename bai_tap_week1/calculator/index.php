<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<div class="container"
     style="background-color: burlywood;position: absolute;margin-left: 30%; width: 400px; height: 300px">
    <h2>Simple Calculator</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>First Operand :</td>
                <td><input type="text" name="firstNumber"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td><select name="calculation">
                        <option value="+">addition</option>
                        <option value="-">subtraction</option>
                        <option value="*">multiplication</option>
                        <option value="/">division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second Operand:</td>
                <td><input type="text" name="secondNumber"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Tính"></td>
            </tr>
        </table>
    </form>
</div>
<?php
$result = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNum = $_POST["firstNumber"];
    $secondNum = $_POST["secondNumber"];
    $calculation = $_POST["calculation"];
    switch ($calculation) {
        case "+" :
            $result = $firstNum + $secondNum;
            break;
        case "-" :
            $result = $firstNum - $secondNum;
            break;
        case "*" :
            $result = $firstNum * $secondNum;
            break;
        case "/" :
            $result = $firstNum / $secondNum;
            break;
    }
    echo $result;
}
?>
</body>
</html>