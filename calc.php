<?php
if (isset($_GET['range'])) {
    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $y1 = $_GET['y1'];
    $y2 = $_GET['y2'];
    $x_rand = rand((int)$x1,(int)$x2);
    $y_rand = rand((int)$y1,(int)$y2);
    echo $x_rand;
    echo $y_rand;

}
@$x_rand = $x;
@$y_rand = $y;

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
    <form action="calc.php" method="get">
        <fieldset>
            <legend>Range</legend>
            <input type="text" name="x1" placeholder="X Range 1">
            <input type="text" name="x2" placeholder="X Range 2">
            <br>
            <input type="text" name="y1" placeholder="Y Range 1">
            <input type="text" name="y2" placeholder="Y Range 2">
            <button type="submit" name="range" value="range">Submit Range</button>

        </fieldset>
        
    </form>
    <form action="calc.php" method="get">
        <fieldset>
            <legend>Enter Answer</legend>
            <input type="text" name="num1" placeholder="Number 1">
            <br>
            <input type="text" name="num2" placeholder="Number 2">
            <select name="operator">
                <option>Select</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
            

        </fieldset>
        
     
    </form>
    <p>The answer is: </p>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "Select":
                echo "Select an operator!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;

        }
        

    }
print_r($_GET);
?>

</body>
</html>