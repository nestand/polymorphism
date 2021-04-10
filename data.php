// For collecting all the articles in one array and send them to another file
<?php
require_once 'classes.php';

//this array will print the result
$publications = array();

$news1 = new NewsPublication;
$news2 = new NewsPublication;
$article1 = new ArticlePublication;
$article2 = new ArticlePublication;
$photo1 = new photoReporting;
$photo2 = new photoReporting;

$publications = array ($news1,$news2, $article1, $article2, $photo1, $photo2);


?>  