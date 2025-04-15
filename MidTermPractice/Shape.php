<?php

abstract class Shape
{
    const PI = 3.14;
    private string $colour;
    private bool $filled;

    function __construct(string $colour, bool $filled)
    {
        $this->colour = $colour;
        $this->filled = $filled;
    }

    abstract public function getArea();

    abstract public function getPerimeter();

    public function toString()
    {
        $type = ucfirst(get_class($this));
        $filled_status = $this->filled ? 'filled' : 'unfilled';
        $area = round($this->getArea(), 2);
        $perimeter = round($this->getPerimeter(), 2);

        return ucfirst($this->colour) . ' ' . $filled_status . ' ' . $type . ' with area ' . $area . ' and perimeter ' . $perimeter . '.';
    }
}

class Circle extends Shape {
    private $radius;
    function __construct(string $colour, bool $filled, $radius) {
        parent::__construct($colour, $filled);
        $this->radius = $radius;
    }

    public function getArea() {
        return self::PI * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * self::PI * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct(string $colour, bool $filled, $width, $height) {
        parent::__construct($colour, $filled);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends Rectangle {
    private $size;

    public function __construct(string $colour, bool $filled, $size) {
        parent::__construct($colour, $filled, $size, $size);
        $this->size = $size;
    }

    public function getArea() {
        return parent::getArea();
    }

    public function getPerimeter() {
        return parent::getPerimeter();
    }
}
?>