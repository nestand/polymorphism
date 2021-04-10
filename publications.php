<?php
require_once 'data.php';

foreach ($publications as $item) {
    echo '<pre>' .'<br>';
    echo 'In the var $item there is' .' '.get_class($item).'<br>';
    print_r($item -> printItem());
    echo '</pre>';
}
