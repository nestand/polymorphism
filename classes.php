<?php
class Publication{
  public $id;
  public $title;
  public $date;
  public $short_content;
  public $preview;
  public $author_name;
  public $type;

  function __constract(){

  }
}

class newsPublication extends Publication {
public function printItem ();
}

class articlePublication extends Publication {
    public function printItem ();
    }

    class photoReporting extends Publication {
        public function printItem ();
        }    

?>