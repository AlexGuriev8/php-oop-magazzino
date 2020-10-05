<?php
   class product{
        private $name;
        protected $category;
        private $description;
        private $price;

        public function __construct($_name,$_category,$_price){
            $this->name=$_name;
            $this->category=$_category;
            $this->price=$_price;
        }
    // ---  get ---
      public function getName(){
        return $this->name;
      }

      public function getPrice(){
          return $this->price;
        }
      public function getDescription(){
          return $this->description;
        }

    //--- set --- 
    public function setName($_name)
    {
        if (!empty($_name)) {
            $this->name = $_name;
        } else {
            die('Il nome non può essere vuoto');
        }
    }
    public function setPrice($_price)
    {
        if (is_numeric($_price)) {
            $this->price = $_price;
        } else {
            die('Il prezzo inserito non è un numero');
        }
    }

    //--- methods --- 

    public function discountPrice($discount){
        if(empty($discount)){
            die('Non è possibile calcolare il discount');
        }
        return $this->price / $discount;
    }

   }
    