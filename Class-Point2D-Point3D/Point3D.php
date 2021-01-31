<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
protected $z;

public function __construct($x, $y,$z)
{
    parent::__construct($x, $y);
    $this->z = $z;
}

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }
    function setXYZ($x,$y,$z){
        parent::setXY($x,$y);
        $this->z = $z;
    }
    function getXYZ(){
        return [$this->x,$this->y,$this->z];
    }
    function toString()
    {
        return "(".$this->x.",".$this->y.",".$this->z.")";
    }

}