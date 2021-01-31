<?php
include_once "Point3D.php";
$point3 = new Point3D(1,2,3);
$point3->setXYZ(8,7,6);
print_r($point3->getXYZ());