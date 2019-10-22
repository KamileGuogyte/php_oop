<?php

class Person {
    
   private $ugis;
   private $vardas;
   private $asmens_kodas;
    //igaus verte tik kostruktoriui pasileidus
    
    public function __construct($vardas, $centimetrai) {
        $this->vardas = $vardas;
        $this->ugis = $centimetrai;
        $this->asmens_kodas = rand(1000, 9999);
        $this->kalbeti();
       //konxtruktorius kalbeti iskviecia paskutini
    }
                
      private function kalbeti() {
         print "labas, as $this->vardas,  mano ugis yra $this->ugis";
      }  
      
      public function pasakykVarda() {
          return $this->vardas;
          
      }
      
}

//objektas
$zmogus1 = new Person ('Tadas', 186);
var_dump($zmogus1);
print $zmogus1->pasakykVarda(); 


//objektas
$zmogus2 = new Person ('Petras', 190);
var_dump($zmogus2);
print $zmogus2->pasakykVarda(); 

