<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông báo</title>
</head>
<body>
<form method="post" action="result.php">
    <h3>Simple Calculator</h3>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First Operand:</td>
                <td><input type="text" name="num1"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td><select name="operator">
                        <option>Addition</option>
                        <option>Subtraction</option>
                        <option>Multiplication</option>
                        <option>Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second Operand:</td>
                <td><input type="text" name="num2"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>



