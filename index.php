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
    public $description;
    public $thumbnail;
    public $cast;
    public $vote;

    //CONSTRUCTOR
    public function __construct($title, $director, $genre, $description, $thumbnail, $cast, $vote) {
       $this->title = $title;
       $this->director = $director;
       $this->genre = $genre;
       $this->description = $description;
       $this->thumbnail = $thumbnail;
       $this->cast = $cast;
       $this->vote = $vote;
    }

    //METHODS
    public function reduceDescrition() {
        if (strlen($this->description) > 30) {
            $str = substr($this->description, 0, 30) . '...';
        }
        echo $str;
    }
}

/* Matrix */
$matrix = new Movie('The Matrix', 'Andy e Larry Wachowski', 'Fantascienza', 'Esistono due realtà: una è l esistenza che conduciamo ogni giorno, l altra è nascosta. Neo vuole scoprire la verità su Matrix, mondo virtuale elaborato al computer creato per tenere sotto controllo le persone. Morpheus potrebbe aiutarlo.', './img/matrix.jpg', 'Keanu Reeves, Laurence Fishburne, Carrie Anne Moss', 4);
$matrix->reduceDescrition();
var_dump($matrix);

/* Pirates */
$pirates = new Movie('Pirati dei Caraibi', 'Gore Verbinski', 'Avventura', 'La figlia del governatore viene rapita da un pirata malvagio. Will Turner, amico d infanzia della ragazza segretamente innamorato di lei, si unisce a Jack Sparrow, un pirata vagabondo, per portare in salvo la fanciulla.', './img/pirati-dei-caraibi.jpg', 'Johnny Depp, Orlando Bloom, Keira Knightley ', 5);
$pirates->reduceDescrition();
var_dump($pirates);

/* Harry Potter */
$harry = new Movie('Harry Potter', 'Chris Columbus', 'Fantastico', 'A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori.', './img/harry-potter.jpeg', 'Daniel Radcliffe, Emma Watson, Rupert Grint', 5);
$harry->reduceDescrition();
var_dump($harry);

/* Pirates */
$signore = new Movie('Il Signore degli Anelli', 'Peter Jackson', 'Fantastico', 'Un giovane hobbit e un variegato gruppo, composto da umani, un nano, un elfo e altri hobbit, partono per un delicata missione, guidati dal potente mago Gandalf. Devono distruggere un anello magico e sconfiggere il malvagio Sauron.', './img/signore-degli-anelli.jpg', 'Elijah Wood, Ian McKellen, Vigo Mortensen', 5);
$signore->reduceDescrition();
var_dump($signore);
?>