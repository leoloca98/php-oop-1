<!-- 
    
1- Definire una classe 'Movie':
-> all'interno della classe dichiarare delle variabili d'istanza
-> all'interno della classe definire un costruttore
-> all'interno della classe definire almeno un metodo
2- istanziare almeno due oggetti 'Movie' e stampare a schermo i valori delle proprietà, possibilmente senza l'uso di var_dump  


-->
<?php

// Classe
class Movie
{
    public $name;
    public $director;
    public $rating;
    public $recessed;

    public function __construct($nome, $regista, $valutazione, $incasso)
    {
        $this->name = $nome;
        $this->director = $regista;
        $this->rating = $valutazione;
        $this->recessed = $incasso;
    }

    public function isRecord($incasso = 2840000000)
    {
        $is_recessed_record = $this->recessed - $incasso;

        if ($is_recessed_record >= 0) {
            return "$this->name è il film con il più grande incasso della storia. Aggiornato al 21/09/2021" . "</br>" . "<hr>";
        } else return "$this->name non è il film con il più grande incasso della storia. Aggiornato al 21/09/2021" . "</br>" . "<hr>";
    }
}

// Istanza 1
$movie_1 = new Movie("Iron Man", "Jon Favreau", "7.8/10", 585000000);

// Istanza 2
$movie_2 = new Movie("Intestellar", "Christopher Nolan", "8.6/10", 675000000);

// Istanza 3
$movie_3 = new Movie("Avatar", "James Cameron", "7.8/10", 2840000000);

echo $movie_1->isRecord();
echo $movie_2->isRecord();
echo $movie_3->isRecord();
