<!DOCTYPE html>
<html>

<head>
    <title>Personal Information</title>
</head>

<body>
    <?php
    //variables for personal information
    $name = "Kazi Shaidul Islam Sunny";
    $age = 27;
    $country = "Bangladesh";
    $introduction = "Hello, I am Kazi Shaidul Islam Sunny. I am $age years old and I am from $country. I am a student. Now I am living in Germany. I am doing Master's. I want to be a programmer. I am so much happy to be a part of Ostad team. Nice to meet you!";
    ?>

    <h1>Personal Information</h1>
    <p><strong>Name:</strong>
        <?php echo $name; ?>
    </p>
    <p><strong>Age:</strong>
        <?php echo $age; ?>
    </p>
    <p><strong>Country:</strong>
        <?php echo $country; ?>
    </p>
    <p><strong>Introduction:</strong>
        <?php echo $introduction; ?>
    </p>
</body>

</html>