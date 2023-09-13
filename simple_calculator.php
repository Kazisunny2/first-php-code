<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //variables 
    $num1 = '';
    $num2 = '';
    $operation = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                // Check for division by zero
                if ($num2 == 0) {
                    $result = "Cannot divide by zero";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operation";
                break;
        }
    }
    ?>

    <div class="simple-calculator">
        <h1>Simple Calculator</h1>
        <form method="post" action="">
            <label for="num1">Enter Number 1:</label>
            <input type="number" id="num1" name="num1" value="<?php echo $num1; ?>" required>
            <br>
            <label for="num2">Enter Number 2:</label>
            <input type="number" id="num2" name="num2" value="<?php echo $num2; ?>" required>
            <br>
            <label for="operation">Select Operation:</label>
            <select id="operation" name="operation">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
            <br>
            <input type="submit" value="Calculate">
        </form>
        <?php
        // Display the result
        if (!empty($result)) {
            echo "<p><strong>Result:</strong> $result</p>";
        }
        ?>
    </div>
</body>

</html>