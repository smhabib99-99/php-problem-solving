<?php

class Car
{
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year  = $year;
    }

    // setters for Car class
    // Setter Methods
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    // getters for Car class
    // Getter methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function carInfo()
    {
        echo "Brand Name: {$this->brand}, Model Name: {$this->model}, Manufacturing Year: {$this->year}\n";
        echo "Brand Name: " . $this->getBrand() . "," . "Model Name: " . $this->getModel() . ", Manufacturing Year: " . $this->getYear() . "\n";
        echo "Brand Name: {$this->getBrand()}, Model Name: {$this->getModel()}, Manufacturing Year: {$this->getYear()}\n";
    }

}

// Object creations
$car1 = new Car("Toyota", "CCX4", "2025");
$car2 = new Car("Mercedes", "Benz", "2025");

// Accessing Details
$car1->carInfo();
$car2->carInfo();

// Updates by Setters Methods
$car2->setBrand("Koenigsegg Agera");
$car2->setModel("CCXR Travita");
$car2->setYear("2025");

echo "\nAfter updates by Setter methods:\n\n";
$car1->carInfo();
$car2->carInfo();
