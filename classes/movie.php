<?php 

class Movie {
  public $title;
  public $genre;
  public $duration;

  public function __construct($x , $y , $z) {
    $this->title = $x;
    $this->genre = $y;
    $this->duration = $z;
  }

}



?>