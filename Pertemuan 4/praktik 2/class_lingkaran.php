<?php
		
    class Lingkaran {
        // Propety
        public $jarijari;
        const PHI = 3.14; 

        // Method
        function __construct($r){
            $this->jarijari = $r;
        }
        function getLuas(){
          $luas = self::PHI * pow($this->jarijari, 2);
          return $luas;
        }

        function getKel(){
            $kel = 2* $this->jarijari * self ::PHI;
            return $kel;
        }
    }
?>