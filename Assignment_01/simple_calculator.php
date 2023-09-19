<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="simple_calculator.php">
        <label for="num1">Enter the first number:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Enter the second number:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <label for="operation">Select an operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    function calculate($num1, $num2, $operation) {
        switch ($operation) {
            case "add":
                return $num1 + $num2;
            case "subtract":
                return $num1 - $num2;
            case "multiply":
                return $num1 * $num2;
            case "divide":
                if ($num2 == 0) {
                    throw new InvalidArgumentException("Division by zero is not allowed.");
                }
                return $num1 / $num2;
            default:
                throw new InvalidArgumentException("Invalid operation.");
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        try {
            $result = calculate($num1, $num2, $operation);
            echo "<p>The result is: {$result}</p>";
        } catch (InvalidArgumentException $e) {
            echo "<p style='color: red;'>{$e->getMessage()}</p>";
        }
    }
    ?>
</body>
</html>
