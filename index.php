<?php 

class Movie {
    public $title;
    public $date;
    public $rate;
    public $genres;
    public $length;
    private $addedBy;

    public function __construct(string $_title, int $_date, int $_rate, array $_genres, string $_length)
    {
        $this -> title = $_title;
        $this -> date = $_date;
        $this -> rate = $_rate;
        $this -> genres = $_genres;
        $this -> length = $_length;
    }

    public function setAddedBy($_id) {
        $this -> addedBy = $_id;
    }

    public function getAddedBy() {
        return $this -> addedBy;
    }
}

$movies = [
    new Movie('Paure e delirio a Las Vegas', 1998, 10, ['commedia', 'grottesco'], '118 min'),
    new Movie('Creep', 2014, 8, ['horror'], '77 min'),
];

$movies[0] -> setAddedBy('Marco');

$movies[1] -> setAddedBy('Giulia');
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
    <h1>Movies</h1>
    <ul>
        <?php foreach( $movies as $movie ) { ?>
            <li>
                <h3><?php echo $movie->title; ?></h3>
                <h4><?php echo $movie->date; ?></h4>
                <h4><?php echo $movie->rate; ?></h4>
                <ul>
                    <?php foreach( $movie->genres as $genre ) { ?>
                        <li><?php echo $genre; ?></li>
                    <?php } ?>     
                </ul>
                <h4><?php echo $movie->length; ?></h4>
            </li>
        <?php } ?>    
    </ul>
</body>
</html>
