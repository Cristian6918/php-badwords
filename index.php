<?php

$string1 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio reprehenderit blanditiis corporis nulla, quasi incidunt. Eius accusantium sit quam voluptatem, provident nisi vel iusto, ab repellat aliquam ex, pariatur tempore. nulla! ";

$string2 = $_GET["word"];

$string3 = '***';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> <?php echo ($replaced = str_replace($string2, $string3, $string1))  ?></p>
    <p> Orginal Length of the paragraph: <?php echo (strlen($string1))  ?></p>
    <p> Lenght of the Replaced paragraph <?php echo (strlen($replaced))  ?></p>

    <p> <?php  ?> </p>

</body>

</html>