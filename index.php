<!-- Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- 
  => 
  => 
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
/* è definita una classe ‘Movie’ */
class Movie {
    /* all'interno della classe sono dichiarate delle variabili d'istanza */
    public $titolo;
    public $genere;
    public $durata;
    public $incasso;
    public $risoluzione;
    public $biglietti_venduti;
    public $costo_biglietto;
    /* all'interno della classe è definito un costruttore */
    function __construct($titolo, $genere, $durata, $incasso, $risoluzione,$biglietti_venduti)
    {
        $this->titolo = $titolo;
        $this->genere= $genere;
        $this->durata= $durata;
        $this->incasso= $incasso;
        $this->risoluzione= $risoluzione;
        $this->biglietti_venduti= $biglietti_venduti;

    }
    /* all'interno della classe è definito almeno un metodo */
    public function setCostoMedio($biglietti_venduti, $incasso){
        return $this->costo_biglietto=$incasso / $biglietti_venduti;  
    }

    public function getCostoMedio() {
        return $this->costo_biglietto;
    }
    
}

$Avengers= new Movie ("Avengers", "superhero", "2.30", 2797501328, "3D", 310000000);

$Avengers->setCostoMedio(310000000, 2797501328);

/* vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */
$Avatar = new Movie ("Avatar", "fantasy", "2.42", 2997511326, "3D", 74006700);

$Avatar->setCostoMedio(2997511326, 74006700);

var_dump($Avengers, $Avatar)

?>