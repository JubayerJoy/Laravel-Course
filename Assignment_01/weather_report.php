<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 25;

    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } elseif ($temperature > 15) {
        echo "<p>It's warm.</p>";
    } else {
        echo "<p>Weather information unavailable.</p>";
    }
    ?>
</body>
</html>
