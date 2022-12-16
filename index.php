<?php 

include_once __DIR__ . '/classes/movie.php';

$movie1 = new Movie("Batman Begins", "Azione", 140);
$movie2 = new Movie("Ritorno al Futuro Parte I", "Fantascienza", 116);
$movie3 = new Movie("Le Iene" , "Drammatico" , 99);

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
    
    <div>
        <p>
            Titolo :
            <?php echo strtoupper($movie1->title) ?>
        </p>
        <p>
            Genere : 
            <?php echo $movie1->genre ?>
        </p>
        <p>
            Durata : 
            <?php echo $movie1->duration ?>
        </p>
        <p>
            <?php echo $movie1->durationFilter(); ?>
        </p>
        <br>
    </div>

    <div>
        <p>
            Titolo :
            <?php echo strtoupper($movie2->title) ?>
        </p>
        <p>
            Genere : 
            <?php echo $movie2->genre ?>
        </p>
        <p>
            Durata : 
            <?php echo $movie2->duration ?>
        </p>
        <p>
            <?php echo $movie2->durationFilter(); ?>
        </p>
        <br>
    </div>

    <div>
        <p>
            Titolo :
            <?php echo strtoupper($movie3->title) ?>
        </p>
        <p>
            Genere : 
            <?php echo $movie3->genre ?>
        </p>
        <p>
            Durata : 
            <?php echo $movie3->duration ?>
        </p>
        <p>
            <?php echo $movie3->durationFilter(); ?>
        </p>
        <br>
    </div>


</body>
</html>