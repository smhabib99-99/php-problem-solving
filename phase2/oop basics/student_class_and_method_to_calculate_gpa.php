<!--  33. Create class Student with method to calculate GPA. -->
<?php

    class Student
    {
        public $name;
        public $grades;

        public function __construct($name, $grades = [])
        {
            $this->name   = $name;
            $this->grades = $grades;
        }

        public function calculateGPA()
        {
            $sum = 0;
            for ($i = 0; $i < count($this->grades); $i++) {
                $sum += $this->grades[$i];
            }

            /**
             * foreach loop is very popular in javascript and php.
             *
             *      $total = 0;
             *    foreach ($this->grades as $grade) {
             *          $total += $grade;
             *     }
             *
             */

            $average = $sum / count($this->grades);

            return $average;
        }
    }

    $rahim      = new Student("Rahim", [80, 82, 81]);
    $averageGPA = $rahim->calculateGPA();
    echo "Average GPA is: $averageGPA.\n";

?>