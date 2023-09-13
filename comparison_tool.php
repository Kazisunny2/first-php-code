<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    // Initialize variables to store the numbers and the result
    $number1 = '';
    $number2 = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the numbers input from the form
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
    ?>

    <div class="comparison-tool">
        <h1>Comparison Tool</h1>
        <form method="post" action="">
            <label for="number1">Enter Number 1:</label>
            <input type="number" id="number1" name="number1" value="<?php echo $number1; ?>" required>
            <br>
            <label for="number2">Enter Number 2:</label>
            <input type="number" id="number2" name="number2" value="<?php echo $number2; ?>" required>
            <br>
            <input type="submit" value="Compare Numbers">
        </form>
        <?php
        // Display the result
        if (!empty($result)) {
            echo "<p><strong>The larger number is:</strong> $result</p>";
        }
        ?>
    </div>
</body>

</html>