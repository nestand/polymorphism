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
    }
}

class NewsPublication extends Publication
{
    public function printItem()
    {
    }
}

class ArticlePublication extends Publication
{
    public function printItem()
    {
    }
}

    class photoReporting extends Publication
    {
        public function printItem()
        {
        }
    }
?>