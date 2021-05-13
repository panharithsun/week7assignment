<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php 
        // Advantages and Disadvantages of Multiple inheritance in PHP
        // 
        // Advantages:
        // - The subclass can inherit from more than one superclass allowing the sharing of
        //   methods and attributes
        // - It increases the readability of the codes and reusabilities of the classes
        // - It also allows the subclass to inherit more than one base class allowing it to be
        //   flexible and can overwrite the base class when necessary 
        //
        // Disadvantages:
        // - Confusions can occur when there are two methods that uses the same name causing the 
        //   program to run into an error 
        // - Complexities may also arise when there are too many inheritance occuring or multi-layered 
        //   inheritance that can also cause serious issues

        // Demonstrate advantages
        trait Animal {
            public function makeSound() {
                echo "i can make some sound";
            }
        }

        trait Personality {
            public function isFriendly() {
                echo "I am very friendly";
            }
        }

        class Dog {
            use Animal;
            use Personality;

            private String $name;
            private int $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function introduce() {
                echo "My name is " . $this->name . " and I'm " . $this->age . " years old";
            }
            
            public function bite() {
                echo "I can bite";
            }

            public function makeSound() {
                echo "I can bark";
            }
        }

        $pupper = new Dog("dog", 8);
        
        $pupper->introduce();
        echo "<br>";
        $pupper->isFriendly();
        echo "<br>";
        $pupper->makeSound();
        echo "<br>";
        $pupper->bite();

        // Demonstrate disadvantages
        trait Board {
            public function feature() {
                echo "Hard board";
            }
        }

        trait Wheels {
            public function feature() {
                echo "round and rollable";
            }
        }

        class Skateboard {
            use Board;
            use Wheels;
            
            public function brand($brand) {
                echo "I am made by " . $brand;
            }
        }
        
        $santacruz = new Skateboard();
        $santacruz->brand("Santa Cruz");
        echo "<br>";
        $santacruz->feature();
        echo "It doesn't work because there is a collision";
        echo "<br>";
        
    ?>
</body>
</html>