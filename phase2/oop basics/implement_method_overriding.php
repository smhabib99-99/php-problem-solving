<!--  35. Implement method overriding. -->
<?php

    /**
     * Method Overriding is like inheritance, but with a twist. It allows a subclass to provide a specific implementation of a method that is already defined in its superclass.
     * When a method in a subclass has the same name, return type, and parameters as a method in its superclass, the method in the subclass overrides the method in the superclass.
     * This is useful when the subclass needs to modify or extend the behavior of the superclass method.
     *
     *
     * Method Overrides holo processor er sathe built in graphics tomake disse, initial support hishebe. But tumi chaile aro graphics lagaite paro valo graphics support paite.
     *
     * to parent class a akta function just diye rakhbe support hishebbe tumi child class a oi function ta change ba override korte paro. like vehicle class start() function thakte pare tumi chaile car class a o start() function rakhte paro. eta car er jonno modified version . ar atai holo method override.
     *
     *
     *
     */

    class Animal
    {
        public function makeSound()
        {
            echo "Animal makes Sound.\n";
        }
    }

    // dog class inherits animal class.
    class Dog extends Animal
    {
        // dog class overrides animal class's make sound.
        public function makeSound()
        {
            echo "Dog is barking.\n";
        }
    }

    $animal1 = new Animal();
    $animal1->makeSound();

    $dog1 = new Dog();
    $dog1->makeSound();

?>