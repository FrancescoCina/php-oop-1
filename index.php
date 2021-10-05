<?php

require_once('modules/Movie.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <!-- Film Batman -->
    <h3><?= $batman->print_title_movie(); ?></h3>
    <ul>
        <li><?= $batman->print_genre_movie() ?></li>
        <li><?= $batman->producer; ?></li>
        <li><?= $batman->production_year; ?></li>
        <li><?= $batman->production_country; ?></li>
    </ul>

    <p>Questo film è uscito <?= $batman->how_many_years_released() ?> anni fa</p>



    <hr>
    <!-- Film James Bond -->

    <h3><?= $james_bond->print_title_movie(); ?></h3>
    <ul>
        <li><?= $james_bond->print_genre_movie() ?></li>
        <li><?= $james_bond->producer; ?></li>
        <li><?= $james_bond->production_year; ?></li>
        <li><?= $james_bond->production_country; ?></li>
    </ul>


    <p>Questo film è uscito <?= $james_bond->how_many_years_released() ?> anni fa</p>


    <hr>




    <!-- Film Avengers -->
    <h3><?= $avengers->print_title_movie(); ?></h3>
    <ul>
        <li><?= $avengers->print_genre_movie() ?></li>
        <li><?= $avengers->producer; ?></li>
        <li><?= $avengers->production_year; ?></li>
        <li><?= $avengers->production_country; ?></li>
    </ul>

    <p>Questo film è uscito <?= $avengers->how_many_years_released() ?> anni fa</p>


</body>

</html>