<?php


class FileDB {
    //klase bus skirta darbui su duomabazemm tekstinis failas  kie
    //kiekviena duombaze turi tureti istruktura nornaliiai mysql naudotume.Panasiai kaip exel veikkia:
   // yra stulpeliaii ir eilutes, ir me norsim atkartoti. Kuriame lentele table row ir col.
    //Clases data varaib;as turi buti pripildyrass ir mestu verte

    //variablai 2 properties
    private $file_name;
    
    /** @var $data array Duomenu masyvas */
    private $data;

    /**
     * F-ija, kuri issikviecia sukurus objekta
     * @param type $file_name Failo pavadinimas
     */  
    
    //funkcijos arba metodai tai klasesi priklausantys
    
    //konstruktorius pasileidia kai sukuriame objekta pasileidzia 
    //magiskas metodas nes pats issikviecia objekto sukurimo metu
   // viena karta pasinaudoji ir viskas 
   // padarp  tik fime name nebe nu;;
    public function __construct($file_name) {
        $this->file_name = $file_name;
    }
    
    //data=null pas mus var dump konstruktorius priima tik viena parametra
    
//metodas load this data yra $data ir sita variabla mes pripildysim 
   // $file_name kelias iki tekstinio failo (nerasom kelio data,txt kad butu universalus
   // i ta data patalpina
   // load pakoreguoja data bus ka grazins ta funkcja 
  //  load pripildo objekta patie sobjekto variabla dada
    public function load() {
        $this->data = file_to_array($this->file_name);
    }
    
        
   // this data yra array ir filename nes funkcija turi zinoti koks failo pavadinimas
   // iraso i duombaze iraso kas tuo metu bus virsuje $data
    public function save() {
        return array_to_file($this->data, $this->file_name);
    }
    
    
    //returnina viska kas bus viduje private $data grazins ta arrey
    //gauna data 
    public function getData() {
        return $this->data;
    }
    
   
    public function setData($data_array) {
        $this->data = $data_array;
       // i to objekto data variabla irasoma yra 
        
    }
    
    
   // paima metodas praso dvieju dalyku 
   // turi grazinti eilutes turini pirmos eilites column pz
   // isims sursta eilute
    //vienas pagauna eilute 
    public function getRow($table, $row_id ) {
        return $this->data[$table][$row_id];
    }
    
    //reikia patalpinti eilite konkreciam table 
    //kitas ideda eilute
    //ideda eilute 
    public function addRow($table, $row) {
        $this->data[$table][] = $row;
        
    }

}


//objektai kuriami kaip variablai
//$db = new FileDb('../data/file.txt');
//var_dump($db);



//function labas($zodis) {
 //   print $zodis;
//}

//labas('labas');
