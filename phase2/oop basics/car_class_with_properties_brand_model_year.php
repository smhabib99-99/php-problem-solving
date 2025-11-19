<!--  31. Create a class Car with properties brand, model, year. -->
  <!--  32. Create a method to display car info. -->
  <?php

      class Car
      {

          public $brand;
          public $model;
          public $year;

          public function __construct($brand, $model, $year)
          {
              $this->brand = $brand;
              $this->model = $model;
              $this->year  = $year;
          }

          public function carInfo()
          {
              echo "Brand Name: $this->brand, Model Name: $this->model, Manufacturing Year: $this->year\n";
          }

      }

      //   car object toiry korlam.
      $carObj = new Car("Toyota", "CCX4", "2025");

      $carObj->carInfo();

  ?>