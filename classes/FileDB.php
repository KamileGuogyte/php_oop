<?php

class FileDB {

    private $file_name;

    /** @var $data array Duomenu masyvas */
    private $data;

    /**
     * F-ija, kuri issikviecia sukurus objekta
     * @param type $file_name Failo pavadinimas
     */
    public function __construct($file_name) {
        $this->file_name = $file_name;
    }

    public function load() {
        $this->data = file_to_array($this->file_name);
    }

    public function save() {
        return array_to_file($this->data, $this->file_name);
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function getRow($table, $row_id) {
        return $this->data[$table][$row_id];
    }

    public function addRow($table, $row) {
        $this->data[$table][] = $row;
    }
/**
 * patikrinam ar egzistuoja ir jeigu ne tai sukuriam table name masve
    public function createTable($table_name) {
        if (!isset($this->data[$table_name])) {
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }
 * 
 * @param type $table_name
 * @return boolean
 */

  //ar egzistuoja tokia lentele
    public function tableExists($table_name) {
        if (isset($this->data[$table_name])) {
            return true;
        }
        return false;
    }

    
    //createTable idedame tableExists funkcija
       public function createTable($table_name) {
           if (!$this->$tableExists[$table_name]){
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }
    
    
   // istriname visa lentele
     public function dropTable($table_name) {
            unset($this->data[$table_name]);
     }
     
    // itrinam masyvo turini bet ne pati masyva
     public function truncateTable($table_name) {
         if ($this->tableExists($table_name)) {
             $this->data[$table_name] = [];
            return true;
        }
        return false;
    }
    
     /**
     * Ši f-ja į pasirinktą Table, nauju arba nurodytu indeksu įdeda row masyvą.
     * @param $table
     * @param $row
     * @return bool
     */
    public function insertRow($table_name, $row, $row_id = null) {
        if ($row_id !== null) {

            if (!isset($this->data[$table_name][$row_id])) {
                $this->data[$table_name][$row_id] = $row;
                return $row_id;
            }

            return false;

        } else {
            $this->data[$table_name][] = $row;

            // surandame pask. indeksa
            end($this->data[$table_name]);
            $row_id = key($this->data[$table_name]);
            
            return $row_id;
        }
        
    // public function updateRow($table, $row_id, $row);
        
        
        
    }

    
  
    
    
    
            
            
            
    
  class FileDB {
//
//        klase bus skirta darbui su duomabazemm tekstinis failas  kie
//        //kiekviena duombaze turi tureti istruktura nornaliiai mysql naudotume.Panasiai kaip exel veikkia:
//        // yra stulpeliaii ir eilutes, ir me norsim atkartoti. Kuriame lentele table row ir col.
//        //Clases data varaib;as turi buti pripildyrass ir mestu verte
//        //variablai 2 properties
//        private $file_name;
//
//        /** @var $data array Duomenu masyvas */
//        private $data;
//
//        /**
//         * F-ija, kuri issikviecia sukurus objekta
//         * @param type $file_name Failo pavadinimas
//         */
//        //funkcijos arba metodai tai klasesi priklausantys
//        //konstruktorius pasileidia kai sukuriame objekta pasileidzia 
//        //magiskas metodas nes pats issikviecia objekto sukurimo metu
//        // viena karta pasinaudoji ir viskas 
//        // padarp  tik fime name nebe nu;;
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
        public function getRow($table, $row_id) {
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
