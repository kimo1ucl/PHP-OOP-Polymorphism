<?php 
//https://www.c-sharpcorner.com/UploadFile/d0e913/abstract-class-interface-two-villains-of-every-interview/
require_once 'Teacher.php';

$t = new Teacher("Kim","Vestergård","Mogensen",null);
echo $t->__toString();
$t->setMiddlename("Vestergaard");
echo $t->__toString();

$t->setSalary(500);
echo $t->__toString();

$t->setClass("ØIOE211");
$t->setClass("opboi20ed601");
echo $t->getClass();


?>