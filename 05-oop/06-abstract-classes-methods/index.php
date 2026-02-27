<?php

abstract class Shape {
    protected $name;

    // abstract method
    abstract public function calcArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    //concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calcArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea()
    {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle("Rectangle", 10, 5);
echo $rectangle->getName() . " has area: " . $rectangle->calcArea() . '<br/>';
echo '<br/>';

var_dump($rectangle);

echo '<br/>';
echo '<br/>';

$circle = new Circle("Circle", 5);
echo $circle->getName() . " has area: " . $circle->calcArea() . '<br/>';

echo '<br/>';

var_dump($circle); 