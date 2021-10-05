<?php

require_once('modules/Movie.php');

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
    <h1><?= $avengers->print_title_movie(); ?></h1>
    <ul>
        <li><?= $avengers->print_genre_movie() ?></li>
        <li><?= $avengers->producer; ?></li>
        <li><?= $avengers->year_production; ?></li>
        <li><?= $avengers->production_country; ?></li>



    </ul>
</body>

</html>