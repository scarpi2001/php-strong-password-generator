<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <?php
        session_start();
        require_once __DIR__ . "/libs/helper.php";

        $pwsLength = $_GET["pwsLength"] ?? false;
        $pws = pws_rand ($pwsLength);
    ?>
</head>

<body>
    <form method="GET">
        <label for="pwsLength">Lunghezza Password</label>
        <input type="number" name="pwsLength" id="pwsLength"
            placeholder="MIN: 08 | MAX: 50"
            min="8" 
            max="50">
        <input type="submit" value="Genera">
    </form>

    <h1>
        <?php
            if ($pws) {

                $_SESSION["pws"] = $pws;
                
                header("Location: ./thanks.php");
            } 
        ?>
    </h1>
</body>
</html>