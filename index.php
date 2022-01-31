<?php

require_once __DIR__ . '/classes/Movies.php';

// $movie_1 = new Movies("spider-man","Sam_Raimi","2002","supereroi","Sony");

$movies = [
    new Movies("spider-man","Sam_Raimi","2002","supereroi","Sony"),
    new Movies("iron-man","Jon-favreau","2008","supereroi","marvel-studios"),
    new Movies("doctor_strange","scott-derrickson","2016","supereroi","arvel-studios"),
    
];

?>

<!-- var_dump($movies); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    <h1>Lista Film</h1>

    <?php foreach($movies as $movie){?>
        <div>
            <h3><?php echo $movie->getInfoFilm(); ?></h3>
            <hs>info</h1>
            <h2><?php echo $movie->nome ?></h2>
            <h2><?php echo $movie->autore ?></h2>
            <h2><?php echo $movie->anno ?></h2>
            <h2><?php echo $movie->genere ?></h2>
            <h2><?php echo $movie->casaproduct ?></h2>
            <br>
        </div>
    <?php } ?>
    
</body>
</html>