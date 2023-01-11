<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();

        $pws = $_SESSION['pws'];
    ?>
    
</head>
<body>
    <h1>Password: <?php echo $pws; ?></h1>
</body>
</html>