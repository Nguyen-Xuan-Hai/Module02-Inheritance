<?php


class Point
{
    protected $x;
    protected $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }
    function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    function getXY(){
        return [$this->x,$this->y];
    }
    function toString(){
        echo "(".$this->x.",".$this->y.")";
    }
}