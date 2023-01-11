<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $pwsLength = $_GET["pwsLength"] ?? false;

        function pws_rand ($length) {
            $chars = array_merge(range("A", "Z"), range("a", "z"), range(0, 9), ["!","@","#","$","%","^","&","*",]);
            $password = "";

            for ($i=0; $i < $length; $i++) { 
                $password .= $chars[array_rand($chars)];
            }

            return $password;
        }

        $pws = pws_rand ($pwsLength);
    ?>
</head>

<body>
    <form>
        <label for="pwsLength">Lunghezza Password</label>
        <input type="text" name="pwsLength">
        <input type="submit" value="Genera">
    </form>

    <h1>
        <?php
            echo "La Password è: " . $pws;
        ?>
    </h1>
</body>
</html>