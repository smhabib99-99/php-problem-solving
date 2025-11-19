<!--  31. Create a class Car with properties brand, model, year. -->
  <!--  32. Create a method to display car info. -->
  <?php

      class Car
      {

          //   public $brand;
          //   public $model;
          //   public $year;

          private $brand;
          private $model;
          private $year;

          public function __construct($brand, $model, $year)
          {
              $this->brand = $brand;
              $this->model = $model;
              $this->year  = $year;
          }

          public function carInfo()
          {
              //   echo "Brand Name: $this->brand, Model Name: $this->model, Manufacturing Year: $this->year\n";
              echo "Brand Name: {$this->brand}, Model Name: {$this->model}, Manufacturing Year: {$this->year}\n";
          }

      }

      //   car object toiry korlam.
      //   prottek tar alada alada copy toiry hosse.
      $carObj = new Car("Toyota", "CCX4", "2025");
      $car1   = new Car("Koenigsegg", "Agera CCXR Travita", "2025");
      $car2   = new Car("Mercedes", "Benz", "2025");

      $carObj->carInfo();
      $car1->carInfo();
      $car2->carInfo();

      /**
       * Explanation

      class Car → defines a blueprint for car objects.

      public $brand, $model, $year; → properties of the class.

      public means accessible from outside the class.

      __construct($brand, $model, $year) → constructor called automatically when creating a new object.

      $this->brand = $brand; → assigns the value to the object’s property.

      displayInfo() → a method to show car details.

      $car1 = new Car("Toyota", "Corolla", 2020); → creates an object with given values.

      $car1->displayInfo(); → calls method to display details.


       *Extra Tips

      You can make properties private and use getter/setter methods to access them safely.

      Methods inside a class can manipulate the object’s data.

      You can create multiple objects from the same class with different values.

      If you want, I can also show a version with private properties and getter/setter methods — that’s more object-oriented best practice.
       */

  ?>