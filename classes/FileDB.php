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

}
