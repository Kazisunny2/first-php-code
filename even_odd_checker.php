<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //variables
    $number = '';
    $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result = ($number % 2 == 0) ? 'Even' : 'Odd';
    }
    ?>

    <div class="even-odd-checker">
        <h1>Even or Odd Checker</h1>
        <form method="post" action="">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" required>
            <input type="submit" value="Check">
        </form>

        <?php
        if ($result !== '') {
            echo "<p><strong>Result:</strong> $result</p>";
        }
        ?>
    </div>
</body>

</html>