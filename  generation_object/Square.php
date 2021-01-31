<?php
include_once "Rectangle.php";

class Square extends Rectangle
{
    public function __construct($name, $height, $widht)
    {
        parent::__construct($name, $height, $widht);
    }
}