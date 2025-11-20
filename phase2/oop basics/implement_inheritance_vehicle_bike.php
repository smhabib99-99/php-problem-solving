 <!-- 34. Implement inheritance: Vehicle → Bike. -->

 <?php

     class Vehicle
     {
         private $brand;
         private $model;
         private $year;

         // constructor function to assign value in class properties.
         public function __construct($brand, $model, $year)
         {
             $this->brand = $brand;
             $this->model = $model;
             $this->year  = $year;
         }

         // Getter Methods
         public function getBrand()
         {
             return $this->brand;
         }
         // Setter Methods
         public function setBrand($brand)
         {
             $this->brand = $brand;
         }

         public function getModel()
         {
             return $this->model;
         }

         public function setModel($model)
         {
             $this->model = $model;
         }

         public function getYear()
         {
             return $this->year;
         }

         public function setYear($year)
         {
             $this->year = $year;
         }

         public function vehicleInfo()
         {
             echo "Brand Name: {$this->brand}, Model Name: {$this->model}, Manufacturing Year: {$this->year}\n";
         }

     }

     class Bike extends Vehicle
     {
         private $type;

         public function __construct($brand, $model, $year, $type)
         {
             parent::__construct($brand, $model, $year); // er karone vehicle class er private property access kora jasse. ta nahole vehicle class er private property access kora jaito na.
             $this->type = $type;
         }

         public function bikeInfo()
         {
             $this->vehicleInfo();
             echo "Bike Type: {$this->type}\n";
         }
     }

     $bike1 = new Bike("Koenigsegg", "Agera CCXR", "2025", "Race Car");
     echo $bike1->bikeInfo();

 ?>