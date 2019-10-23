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

    
  
    
    
    
