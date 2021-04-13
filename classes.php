<?php
class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $preview;
    public $author_name;
    public $type;

    public function __constract()
    {
        $this->$id = $row ['id'];
        $this->title = $row ['title'];
        $this->date = $row ['date'];
        $this->short_content = $row ['short_content'];
        $this->preview = $row ['preview'];
        $this->author_name = $row ['author_name'];
        $this->type = $row ['type'];
    }
   
}

class NewsPublication extends Publication
{
    public function printItem()
    {
        echo '<br> News:' .$this->title;
        echo '<br> Date:' .$this->date;
        echo '<br>';
    }
}

class ArticlePublication extends Publication
{
    
    public function printItem()
    {
        echo '<br> Article:' .$this->title;
        echo '<br> Author:' .$this->author_name;
        echo '<br>';
    }
}

    class PhotoReporting extends Publication
    {
       public function printItem()
        {
            echo '<br> Article:' .$this->title;
            echo '<br><img src="http://localhost/polymorphism/img .$this->preview">';
            echo '<br> Date:' .$this->date;
            echo '<br>';
        }
    }
?>