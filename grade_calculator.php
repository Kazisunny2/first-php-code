<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //variables
    $test1 = '';
    $test2 = '';
    $test3 = '';
    $average = '';
    $grade = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input for test scores
        $test1 = $_POST["test1"];
        $test2 = $_POST["test2"];
        $test3 = $_POST["test3"];

        // Calculate the average of test scores
        $average = ($test1 + $test2 + $test3) / 3;

        //Corresponding letter grade
        if ($average >= 90) {
            $grade = 'A+';
        } elseif ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        } elseif ($average >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
    }
    ?>

    <h1>Grade Calculator</h1>
    <h5>90-100=A+, 80-89=A, 70-79=B, 60-69=C, 50-59=D, 0-49=F</h5>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="test1">Test 1 Score:</label>
        <input type="number" name="test1" required>

        <label for="test2">Test 2 Score:</label>
        <input type="number" name="test2" required>

        <label for="test3">Test 3 Score:</label>
        <input type="number" name="test3" required>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($average !== '') {
        echo "<p><strong>Average Score:</strong> $average</p>";
        echo "<p><strong>Letter Grade:</strong> $grade</p>";
    }
    ?>
</body>

</html>