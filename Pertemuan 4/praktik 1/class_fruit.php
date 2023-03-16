<?php
  class Fruit {
      // Property
      public $name; 
      public $color;

      // Method
      function getName($name) {
          return $this->name = $name;
      }

      function getColor($color) {
          return $this->color = $color;
      }
  }

        $apple = new Fruit();

		
	    $banana = new Fruit();
	
	    echo $apple->getName(" Apple");
	    echo $apple->getColor(" Red");
	    echo "<br><br>";
	    echo $banana->getName(" Banana");
        echo $banana->getColor(" Yellow");
?>