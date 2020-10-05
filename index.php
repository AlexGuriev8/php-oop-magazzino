<?php 
require_once 'classes/product.php';
require_once 'classes/computer.php';

$huawei = new Computer('Huawei Matebook','Huawei','pc',1900,'32GB','AMD');
echo $huawei->getRam();
$huawei->setName('Matebook D15');
echo $huawei->getPrice();
var_dump($huawei);


$hp = new Computer('Hp Envy','hp','pc',1000,'16GB','Intel');
var_dump($hp);
$hp->setPrice(1100);
 echo $hp->discountPrice(20);