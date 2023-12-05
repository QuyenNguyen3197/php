<?php
    class Animal{
        public function sound(){
            echo "<br> Animal make a sound ";
        }
    }

    class Dog extends Animal{
        public function sound(){
            echo "<br> The dog barks";
        }
    }

    class Cat extends Animal{
        public function sound(){
            echo "<br> The cat meow";
        }
    }

    interface CanFly{
        public function fly();
    }

    class Bird extends Animal implements CanFly{
        public function sound(){
            echo "<br> The bird chips";
        }
        public function fly(){
            echo "<br> The bird is flying";
        }
    }

    $animal = new Animal();
    $animal -> sound();

    $dog = new Dog();
    $animal = $dog;
    $animal -> sound();

    $cat = new Cat();
    $animal = $cat;
    $animal -> sound();

    
    $bird = new Bird();
    $bird -> sound();


?>
