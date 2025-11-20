<!-- professional OOP version of the Student class with private properties, getters/setters, and a GPA calculation method. 33. Create class Student with method to calculate GPA. -->


<?php
    class Student
    {

        private $name;
        private $grades;

        public function __construct($name, $grades = [])
        {
            $this->name   = $name;
            $this->grades = $grades;
        }

        // Setter Methods
        public function setName($name)
        {
            $this->name = $name;
        }

        public function setGrades($grades)
        {
            $this->grades = $grades;
        }

        // Getter Methods
        public function getName()
        {
            return $this->name;
        }

        public function getGrades()
        {
            return $this->grades;
        }

        // For adding grades to the array, we can take another function.
        public function addGrades($grades)
        {
            $this->grades[] = $grades;
        }

        public function calculateGPA()
        {
            $sum = 0;
            for ($i = 0; $i < count($this->grades); $i++) {
                $sum += $this->grades[$i];
            }
            $average = $sum / count($this->grades);

            return $average;
        }

    }

    $rahim   = new Student("Rahim", [80, 81, 82]);
    $average = $rahim->calculateGPA();
    echo "Average is: $average.\n";
    $rahim->addGrades(89);
    echo $rahim->calculateGPA() . "\n";
    // $rahim->addGrades([91, 92, 93]); problem kortese karon ami array pathassi single number na pathiye.
    // echo $rahim->calculateGPA() . "\n";

?>
