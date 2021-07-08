<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movie {
    public $title;
    public $director;
    public $rating;


    function __construct($title = "Title unknown", $director = "Director unknown", $rating = 0) {
        $this->title = $title;
        $this->director =  $director;
        $this->rating = $rating;
    }
    // public function setRating($newRating) {
    //     $this->rating = $newRating;
    // }

    public function getRating() {
        $voto = $this->rating;
        if ($voto <= 3.0 && $voto >0) {
            return "<h2 style=\"color: brown;\">" . "This is not the best film you'll ever seen.." . " " . "(Voto: $voto/5)" . "</h2>";
        } elseif($voto < 4.0 && $voto > 3.0) {
            return "<h2 style=\"color: orange;\">" . "This is an average film" . " " . "(Voto: $voto/5)" . "</h2>";
        } elseif ($voto > 5.0) {
            return "<h2 style=\"color: red;\">" . "This is a GREAT film!" . " " . "(Voto: $voto/5)" . "</h2>";
        } elseif ($voto == 0) {
            return "<h2 style=\"color: blue;\">" . "Can't find any votes about this film" . "</h2>";
        }
    }
}

// 1/4
$film1 = new Movie("Trainspotting", "Danny Boyle", 3.9);
// $film1 = new Movie();
// $film1->title = "Trainspotting";
// $film1->director = "Danny Boyle";
// $film1->rating = 3.9;

// var_dump($film1);
echo "<h2>" . $film1->title . "</h2>"
    . "<h3>" . $film1->director . "</h3>"
    . "<h5>" . $film1->getRating() . "</h5>"
    . "<hr>";

// 2/4
$film2 = new Movie("Il grande Lebowski", "Fratelli Coen", 4.4);
// $film2 = new Movie();
// $film2->title = "Il grande Lebowski";
// $film2->director = "Fratelli Coen";
// $film2->rating = 4.4;
// var_dump($film2);
echo "<h2>" . $film2->title . "</h2>"
    . "<h3>" . $film2->director . "</h3>"
    . "<h5>" . $film2->getRating() . "</h5>"
    . "<hr>";

// 3/4
$film3 = new Movie("The Disaster Artist", "James Franco", 3);
// $film3 = new Movie();
// $film3->title = "The Disaster Artist";
// $film3->director = "James Franco";
// $film3->rating = 3;
// var_dump($film3);
echo "<h2>" . $film3->title . "</h2>"
    . "<h3>" . $film3->director . "</h3>"
    . "<h5>" . $film3->getRating() . "</h5>"
    . "<hr>";

// 4/4
$film4 = new Movie();
echo "<h2>" . $film4->title . "</h2>"
    . "<h3>" . $film4->director . "</h3>"
    . "<h5>" . $film4->getRating() . "</h5>"
    . "<hr>";


//copyrightssssss
echo "<h6>" . "!! I N C R E D I B L E !! layout <br> from PARA" . "</h6>"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First es OOP</title>
</head>
<body>
    
</body>
</html>
