<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="grade_calculator.php">
        <label for="score1">Test Score 1:</label>
        <input type="number" id="score1" name="score1" required>
        <br>
        <label for="score2">Test Score 2:</label>
        <input type="number" id="score2" name="score2" required>
        <br>
        <label for="score3">Test Score 3:</label>
        <input type="number" id="score3" name="score3" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;

        $letterGrade = "";

        if ($average >= 90) {
            $letterGrade = "A";
        } elseif ($average >= 80) {
            $letterGrade = "B";
        } elseif ($average >= 70) {
            $letterGrade = "C";
        } elseif ($average >= 60) {
            $letterGrade = "D";
        } else {
            $letterGrade = "F";
        }

        echo "<p>Average Score: $average</p>";
        echo "<p>Grade Obtained: $letterGrade</p>";
    }
    ?>
</body>
</html>
