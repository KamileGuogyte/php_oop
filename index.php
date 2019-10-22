<?php


require 'functions/file.php';
require 'classes/FileDB.php';

//objekto sukurimas
$db = new FileDB('data/file.txt');
$db->load();

//i objekta  norim pridedi eilute
$db->addRow('Vartotojui', ['name' => 'Ramune', 'surname' => 'Uogyte']);
//add row kiekvieno refresho metu vykdysis
$db->save();
//jei atirasysim puslapi toks issisaugios array saugom i faila

//paloadins kas gules faile
$db ->load();
 var_dump($db->getData());
//rodys null be load



 
 
//$db->load();
//$db setData(['table'=> [['name']] 

   // var_dump($db->getData());

//$db->save();


//$db->getRow('table', 0); 
//table surado 0 eilute ir geazino aurimas stacenka


//$db->load();
//$db ->save(); //uzissevinins uzjasoninras

//$db->

//var_dump($db);

//eiles tvarka cia yra svarbi