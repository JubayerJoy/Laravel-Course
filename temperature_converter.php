<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; margin: 20px;">

    <h1 style="color: #333;">Temperature Converter</h1>
    <form method="post" action="temperature_converter.php" style="margin: 20px;">
        <label for="temperature" style="font-weight: bold;">Enter Temperature:</label>
        <input type="text" id="temperature" name="temperature" required style="padding: 5px;">
        <br>
        <label for="conversion" style="font-weight: bold;">Select Conversion:</label>
        <select id="conversion" name="conversion" style="padding: 5px;">
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert" style="padding: 10px; background-color: #333; color: #fff; border: none; cursor: pointer;">
    </form>

    <?php
    
    function convertTemperature($temperature, $conversion) {
        if (!is_numeric($temperature)) {
            throw new InvalidArgumentException("Please enter a valid numeric temperature.");
        }

        switch ($conversion) {
            case "celsius_to_fahrenheit":
                return ($temperature * 9/5) + 32;
            case "fahrenheit_to_celsius":
                return ($temperature - 32) * 5/9;
            default:
                throw new InvalidArgumentException("Invalid conversion type.");
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        try {
            // Perform the conversion
            $result = convertTemperature($temperature, $conversion);

            echo "<p style='font-weight: bold;'>{$temperature} ";
            if ($conversion == "celsius_to_fahrenheit") {
                echo "Celsius is {$result} Fahrenheit.</p>";
            } elseif ($conversion == "fahrenheit_to_celsius") {
                echo "Fahrenheit is {$result} Celsius.</p>";
            }
        } catch (InvalidArgumentException $e) {
            echo "<p style='color: red;'>{$e->getMessage()}</p>";
        }
    }
    ?>

</body>
</html>
