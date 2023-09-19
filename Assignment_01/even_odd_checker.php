<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>
    <form method="post" action="even_odd_checker.php">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result = ($number % 2 == 0) ? "even" : "odd";

        echo "<p>The number $number is $result.</p>";
    }
    ?>
</body>
</html>
