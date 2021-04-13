<?php
require_once 'data.php';

//For every object printItem

foreach ($publications as $item) {
    print_r($item -> printItem());
  }
