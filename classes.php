<?php

class User {

    public $name ;
    public $id ;

    public function k2() {
      echo 'altitude' ;
    }


}


class Tweet {

    private $id ;
    private $user_id ;
    private $text ;

    public function __construct($id,$user_id,$text) {


      $this->id = $id;
      echo ('ustawiłem'.$id);
      $this->user_id = $user_id ;
      echo ('ustawiłem'.$user_id);
      $this->text = $text ;
      echo ('ustawiłem'.$text);

    }

    public function setId($newId) {
      $this->id= $newId ;
    }

    public function setUser($newUser) {
      $this->user_id = $newUser ;
    }

    public function getId() {
      return $this->id ;
    }

    public function createTweet($text) {
      $this->text = $text ;

    }

    public function loadTweetFromDB()

}





 ?>
