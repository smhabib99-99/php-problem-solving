<!--  38. Implement private/protected/public access modifiers. -->
<?php

    class Person
    {
        public $name;
        protected $age;
        private $salary;

        public function __construct($name, $age, $salary)
        {
            $this->name   = $name;
            $this->age    = $age;
            $this->salary = $salary;
        }

        public function getName()
        {
            echo "Showing {$this->name}\n";
        }

        protected function getAge()
        {
            echo "Showing {$this->age}\n";
        }

        private function getSalary()
        {
            echo "Showing {$this->salary}\n";
        }

        public function accessProtectedPrivate()
        {
            $this->getAge();
            $this->getSalary();
        }

    }

    $person = new Person("habib", "23", "50000");
    $person->getName();
    $person->accessProtectedPrivate();
    // $person->getAge(); will through error.
    // $person->getSalary(); will through error.

?>