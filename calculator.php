<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laskin</title>
</head>

<body>
    <form action="site.php" method="post">
        First num:<input type="number" step="0.1" name="num1"> <br>
        OP: <input type="text" name="op"><br>
        Second num:<input type="number" step="0.1" name="num2"> <br>
        <input type="submit" name="submit" value="Laske">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        switch ($op) {
            case '+':
                echo $num1 + $num2;
                break;
            case '-':
                echo $num1 - $num2;
                break;
            case '/':
                echo $num1 / $num2;
                break;
            case '*':
                echo $num1 * $num2;
                break;
            default:
                echo "Invalid, check your nums";
                break;
        }
    } else {
        die('Wrong request');
    }

    ?>


</body>

</html>