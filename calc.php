<?php
session_start();


$_SESSION['correct'];
$_SESSION['attempt'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <h1>Math Exercises</h1>
    <form action="calc.php" method="post">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator" id="">
            <option value="">None</option>
            <option value="">Add</option>
            <option value="">Subtract</option>
            <option value="">Multiply</option>
            <option value="">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>



    </form>
</body>
</html>