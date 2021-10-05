<?php

// Dichiarazione classe
class Movie
{
    // Dichiarazione proprietà della classe (Istanze)
    public $title;
    public $genre;
    public $producer;
    public $production_year;
    public $production_country;

    // Costruttore
    public function __construct($_title, $_genre, $_producer = 'Anonimo')
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->producer = $_producer;
    }

    // Funzioni/metodi per stampare
    public function print_title_movie()
    {
        echo $this->title;
    }

    public function print_genre_movie()
    {
        echo $this->genre;
    }
}

// ------- ASSEGNAZIONE PRIMO OGGETTO (BATMAN);


$batman = new Movie('Batman Begins', 'Thriller', 'Charles Roven');

$batman->production_year = 2016;
$batman->production_country = 'USA';




// ------- ASSEGNAZIONE SECONDO OGGETTO (JAMES BOND);

$james_bond = new Movie('Skyfall', 'Action', 'Micheal Wilson');


$james_bond->production_year = 2012;
$james_bond->production_country = 'UK';





// ------- ASSEGNAZIONE TERZO OGGETTO (AVENGERS);

$avengers = new Movie('The Avengers', 'Action/Adventure', 'Joe Russo');
$avengers->production_year = 2012;
$avengers->production_country = 'USA';
