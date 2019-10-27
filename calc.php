<?php
session_start();

// SESSION STUFF IS A W.I.P.
$correct = $_SESSION['correct'];
$attempt = $_SESSION['attempt'];

// POST DATA INTO VARIABLES
$range = isset($_POST['range']);
$sub = isset($_POST['submit']);


if ($range) {
    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $y1 = $_POST['y1'];
    $y2 = $_POST['y2'];
    $x_rand = rand((int)$x1,(int)$x2);
    $y_rand = rand((int)$y1,(int)$y2);
    $x = $x_rand;
    $y = $y_rand;
    

}
// FUNCTION CALCULATES THE ANSWER
function calculate($sub) {
    if ($sub) {
    $result1 = $_POST['num1'];
    $result2 = $_POST['num2'];
    $answer = $_POST['answer'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case "Select":
            echo "Select an operator!";
    }
        if ($operator == "+") {
            $total = $result1 + $result2;
        }
        if ($operator == "-") {
            $total = $result1 - $result2;
        }
        if ($operator == "*") {
            $total = $result1 * $result2;
        }
        if ($operator == "/") {
            $total = $result1 / $result2;
        }
        if ($total == $answer) {
            echo "cool";
        }
        elseif ($total != $answer) {
            echo "not cool";
        }
    }
}
$calculate = calculate($sub);


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
    <form action="calc.php" method="POST">
        <!-- Range Form -->
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
    <!-- Answer Form -->
    <form action="calc.php" method="POST">
        <fieldset>
            <legend>Enter Answer</legend>
            <input type="text" name="num1" value="<?php echo @$x; ?>" placeholder="Number 1">
            <br>
            <input type="text" name="num2" value="<?php echo @$y; ?>" placeholder="Number 2">
            <br>
            <input type="text" name="answer" placeholder="Enter Answer Here">

            <select name="operator">
                <option>Select</option>
                <option value="+">Add</option>
                <option value="-">Subtract</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
            

        </fieldset>
        
     
    </form>

</body>
</html>