<?php
include_once "Shape.php";

class Rectangle extends Shape
{
    public $widht;
    public $height;

    public function __construct($name,$height,$widht)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->widht = $widht;
    }
    public function calculateArea(){
        return $this->height * $this->widht;
    }
    public function calculatePerimeter(){
        return ($this->height + $this->widht) * 2;
    }
}