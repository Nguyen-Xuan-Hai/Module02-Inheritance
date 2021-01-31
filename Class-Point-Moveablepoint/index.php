<?php
include_once "MoveablePoint.php";
$moveablePoint = new MoveablePoint(4,7,8,5);
$moveablePoint->toString();
echo "<br>";
$moveablePoint->move();
$moveablePoint->toString();