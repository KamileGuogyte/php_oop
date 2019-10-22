<?php

class Person {
    
    public $ugis;
    public $vardas;
    public $asmens_kodas;
    
    public function __construct($vardas, $centimetrai) {
        $this->vardas = $vardas;
        $this->ugis = $centimetrai;
        $this->asmens_kodas = rand(1000, 9999);
        $this->kalbeti();
    }
                
      private function kalbeti() {
         print "labas, as $this->vardas,  mano ugis yra $this->ugis";
      }          
}

$zmogus1 = new Person ('Tadas', 186);
var_dump($zmogus_1);

$zmogus2 = new Person ('Petras', 190);
var_dump($zmogus_2);



