<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form method="post" action="comparison_tool.php">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" name="number1" required>
        <br>
        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" name="number2" required>
        <br>
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
