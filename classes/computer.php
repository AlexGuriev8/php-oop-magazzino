<?php 
require_once 'product.php';


class Computer extends product {
    private $brand;
    private $ram;
    private $cpu;

    function __construct($_name,$_brand, $_price,$_category,$_ram,$_cpu)
    {
       parent::__construct($_name,$_price,$_category);
       $this->brand = $_brand;
       $this->ram = $_ram;
       $this->cpu = $_cpu;
    }

    // ---  get ---
    public function getBrand()
    {
        return $this->brand;
    }

    public function getRam()
    {
        return $this->ram;
    }
    public function getCpu()
    {
        return $this->cpu;
    }
}
