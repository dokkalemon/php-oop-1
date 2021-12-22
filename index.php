<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php
class Movie {
    //ATTRIBUTE
    public $title;
    public $director;
    public $genre;
    public $thumbnail;
    public $cast;
    public $vote;

    //CONSTRUCTOR
    public function __construct($title, $director, $genre, $thumbnail, $cast, $vote) {
       $this->title = $title;
       $this->director = $director;
       $this->genre = $genre;
       $this->thumbnail = $thumbnail;
       $this->cast = $cast;
       $this->vote = $vote;
    }

    //METHODS
}

$matrix = new Movie('The Matrix', 'Andy e Larry Wachowski', 'Fantascienza', './img/matrix.jpg', 'Keanu Reeves, Laurence Fishburne, Carrie Anne Moss', 4);
var_dump($pippo)
?>