<?php
class Producto{
    public $codigo; 
    protected $nombre;
    private $stock;
    public static $id=0;

    public function __construct(){
        $num=func_num_args();
        self::$id++;
        switch($num){
            case 3:
                $this->codigo=func_get_arg(0);
                $this->nombre=func_get_arg(1);
                $this->stock=func_get_arg(2);
        }
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock){
        if($stock<0){
            $this->stock = $stock;
        }else{
            $this->stock=$stock;
        }
    }

    /**
     * Get the value of stock
     */ 
    public function getStock(){
        return $this->stock;
    }

    public function __toString(): String{
        return "<p>El código es: {$this->codigo}, En nombre: {$this->nombre}, el Stock: {$this->stock}";
    }


















}

