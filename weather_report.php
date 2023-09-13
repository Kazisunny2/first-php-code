<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //temperature is submitted via a form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the temperature input from the form
        $temperature = $_POST['temperature'];

        //the weather condition based on the temperature
        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature <= 20) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }
    } else {
        // Default temperature if not submitted
        $temperature = "";
        $message = "Enter a temperature to check the weather.";
    }
    ?>

    <div class="weather-report">
        <h1>Weather Report</h1>
        <form method="post" action="">
            <label for="temperature">Enter Temperature (°C):</label>
            <input type="number" id="temperature" name="temperature" value="<?php echo $temperature; ?>" required>
            <input type="submit" value="Check Weather">
        </form>
        <p><strong>Message:</strong>
            <?php echo $message; ?>
        </p>
    </div>
</body>

</html>