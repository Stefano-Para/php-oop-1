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

    public function setRating($voto) {
        if($voto > 4.0) {
            return "<h2 style=\"color: red;\">" . "This is a GREAT film!" . " " . "(Voto: $voto/5)" . "</h2>";
        } else {
            return "<h2 style=\"color: brown;\">" . "This is not the best film you'll ever seen" . " " . "(Voto: $voto/5)" . "</h2>";
        }
    }
}
// 1/3
$film1 = new Movie();
$film1->title = "Trainspotting";
$film1->director = "Danny Boyle";
$film1->rating = 4.4;
var_dump($film1);
echo "<h2>" . $film1->title . "</h2>"
    . "<h3>" . $film1->director . "</h3>"
    . "<h5>" . $film1->setRating($film1->rating) . "</h5>"
    . "<hr>";

// 2/3
$film2 = new Movie();
$film2->title = "Il grande Lebowski";
$film2->director = "Fratelli Coen";
$film2->rating = 4.3;
var_dump($film2);
echo "<h2>" . $film2->title . "</h2>"
    . "<h3>" . $film2->director . "</h3>"
    . "<h5>" . $film2->setRating($film2->rating) . "</h5>"
    . "<hr>";


// 3/3
$film3 = new Movie();
$film3->title = "The Disaster Artist";
$film3->director = "James Franco";
$film3->rating = 4;
var_dump($film3);
echo "<h2>" . $film3->title . "</h2>"
    . "<h3>" . $film3->director . "</h3>"
    . "<h5>" . $film3->setRating($film3->rating) . "</h5>"
    . "<hr>";





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
