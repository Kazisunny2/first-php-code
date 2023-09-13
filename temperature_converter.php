<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" required>

        <label for="conversion_direction">Choose Conversion:</label>
        <select name="conversion_direction" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>
    <?php
    //variables
    $temperature = '';
    $converted_temperature = '';
    $conversion_direction = '';

    // Function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    // Function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion_direction = $_POST["conversion_direction"];

        if ($conversion_direction == "celsius_to_fahrenheit") {
            $converted_temperature = celsiusToFahrenheit($temperature);
        } elseif ($conversion_direction == "fahrenheit_to_celsius") {
            $converted_temperature = fahrenheitToCelsius($temperature);
        }
    }
    ?>

    <?php
    if ($converted_temperature !== '') {
        echo "<p><strong>Result:</strong> ";
        if ($conversion_direction == "celsius_to_fahrenheit") {
            echo "$temperature Celsius is $converted_temperature Fahrenheit.";
        } elseif ($conversion_direction == "fahrenheit_to_celsius") {
            echo "$temperature Fahrenheit is $converted_temperature Celsius.";
        }
        echo "</p>";
    }
    ?>
</body>

</html>