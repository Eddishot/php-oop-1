<?php

class Movie {
    public $title;
    public $genre;
    public $duration;
    public $director;

    function __construct($_title, $_genre, $_duration, $_director  ){
        $this->setTitle($_title);
        $this->genre = $_genre;
        $this->duration = $_duration ;
        $this->Directior = $_director;
    }



    public function setTitle($_title){
        return $this ->title = $_title;

    }


    public function getTitle(){
        return $this->title;

    }
    public function getGenre(){
        return $this->genre;

    }
    public function getDuration(){
        return $this->duration;

    }
    public function getDirector(){
        return $this->Directior;

    }

   
}

$newMovie = new Movie("The Departed", "Thriller, Gangster","160 min", "Martin Scorsese" );
// var_dump($newMovie);




$newMovie2 = new Movie("Il Padrino", "Drammatico, Gangster", "210 min", "Francis Ford Coppola");
// var_dump($newMovie2);


$newMovie3 = new Movie("Il Labirinto del Fauno", "Drammatico, Horror, Fantastico", "120 min", "Guillermo Del Toro");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <div>
        <h1>
            <?php echo $newMovie -> getTitle() ?>
        </h1>
        <ul>
            
            <li><?php  echo  $newMovie -> getGenre()  ?></li>
            <li><?php  echo  $newMovie -> getDuration()  ?></li>
            <li><?php  echo  $newMovie -> getDirector()  ?></li>
        </ul>
    </div>
    <div>
        <h1>
            <?php echo $newMovie2 -> getTitle()  ?>
        </h1>
        <ul>
            
            <li><?php  echo  $newMovie2 -> getGenre()  ?></li>
            <li><?php  echo  $newMovie2 -> getDuration()  ?></li>
            <li><?php  echo  $newMovie2 -> getDirector()  ?></li>
        </ul>
    </div> <div>
        <h1>
            <?php echo $newMovie3 -> getTitle()  ?>
        </h1>
        <ul>
            
            <li><?php  echo  $newMovie3 -> getGenre()  ?></li>
            <li><?php  echo  $newMovie3 -> getDuration()  ?></li>
            <li><?php  echo  $newMovie3 -> getDirector()  ?></li>
        </ul>
    </div>
</body>
</html>