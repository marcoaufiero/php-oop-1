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

  public function durationFilter(){
    if( $this->duration > 120){
        return "Il film $this->title dura più di 2 ore";
    }else{
        return "Il film $this->title dura meno di 2 ore";
    }
  }

}

?>