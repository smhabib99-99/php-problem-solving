<?php

interface Shape
{
    public function area();
    public function perimeter();
}

class Rectangle implements Shape
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width  = $width;
    }

    public function area()
    {
        return $this->length * $this->width;
    }

    public function perimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(5, 5);

echo "{$rectangle->area()}" . "\n"; // "{}====> dynamic vabe variable boshano jai output dekhanor jonno"
                                    // "" =====> etake template literals strings bole er vitore kono variable boshale directly kaj kore na sei jonno er vitore amra {}==>dynamic vabe boshate hoi".
echo $rectangle->perimeter() . "\n";

class Circle implements Shape// interface apply koresi ekhane.

{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(5);
echo "Circle Area: " . $circle->area() . "\n";
echo "Circle Perimeter: " . $circle->perimeter() . "\n";
