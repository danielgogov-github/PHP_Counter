<?php

    $counterFileName = 'counter.php';
    $counterCount = counterFileExists($counterFileName);

    if($_POST) {
        $counterCount++;
        if(file_exists($counterFileName)) {
            file_put_contents($counterFileName, $counterCount);
        }
    }

    function counterFileExists(string $counterFileName) {
        if(file_exists($counterFileName)) {
            return intval(file_get_contents($counterFileName));
        }
        return 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Counter</title>
</head>
<body>
    <div class="page">
        <div class="counter">
            <h1>
                <?php echo $counterCount; ?>
            </h1>
        </div>

        <form action="" method="POST">
            <input type="hidden" name="hidden" value="submit">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
