<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle('Circle 01',3);
echo 'Circle area: ' .$circle->calculateArea(). '<br/>';
echo 'Circle perimeter: '.$circle->calculatePerimeter().'<br/>';

$cylinder = new Cylinder('Cylinder 01',3,4);
echo 'Cylinder: '.$cylinder->calculateArea().'<br/>';
echo 'Cylinder: '.$cylinder->calculatePerimeter().'<br/>';

$rectangle = new Rectangle('Rectangle 01',3,4);
echo 'Rectangle: '.$rectangle->calculateArea().'<br/>';
echo 'Rectangle: '.$rectangle->calculatePerimeter().'<br/>';

$square = new Square('Square 01',4,4,4);
echo 'Rectangle: '.$square->calculateArea().'<br/>';
echo 'Rectangle Perimeter: '.$square->calculatePerimeter().'<br/>';

