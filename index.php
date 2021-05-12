<?php
    require "config.php";
    require "src/function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>DB in PHP elementar</title>
</head>
<body>
    <div class="pageWrap">
        <h1>Editace studentů</h1>
            <div class="wrap">
                <a href="presentation/insertForm.php">Přidat nového studenta</a>
                <a href="presentation/listStudent.php">Vymazat vybraného studenta</a>
                <a href="presentation/listStudent.php">Editovat vybraného studenta</a>
            </div>
    </div>

</body>
</html>
