<?php


class Circle
{
    protected $radius;
    protected $color;
    public function __construct($color,$radius)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    function circleArea(){
        return pi() * ($this->radius **2);
    }
    function toString(){
        echo 'Radius: '.$this->radius."<br>";
        echo 'Color: '.$this->color.'<br>';
        echo 'CircleArea: '.$this->circleArea().'<br>';
    }
}