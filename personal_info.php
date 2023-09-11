<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">

    <h1 style="color: #333;">Introduction</h1>

    <?php
    $name = "Jubayer Abdullah Joy";
    $age = 26;
    $country = "Bangladesh";
    $introduction = 'Senior Software Engineer at Vertikal RMS. <a href="https://github.com/jubayerjoy" target="_blank" style="text-decoration: none; color: #0078d4;">Find me on Github.</a>';
    ?>

    <p style="font-weight: bold;">Name: <?php echo $name; ?></p>
    <p style="font-weight: bold;">Age: <?php echo $age; ?></p>
    <p style="font-weight: bold;">Country: <?php echo $country; ?></p>
    <p style="font-weight: bold;">Introduction: <?php echo $introduction; ?></p>
</body>
</html>
