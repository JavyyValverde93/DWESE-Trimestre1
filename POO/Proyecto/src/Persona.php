<?php
class Persona{
    public static $cont;
    public $nombre;
    public $apellidos;
    protected $edad;

    public function __construct(){
        $self::incrementarPersona(); 
        $n=func_get_args();
        switch($n){
            case 3:
                $this->inicio(func_get_args());
            break;
            case 2:
                $this->inicio(func_get_args());
        }

        public function inicio($arg){
            $this->nombre = $arg[0];
            $this->apellidos = $arg[1];
            $this->edad = $arg[2];
        }

        public function inicio($arg){
            $this->nombre = $arg[0];
            $this->apellidos = $arg[1];
        }

        public function  __toString() : String{
            return "<pre>{$this->apellidos}, {$this->nombre}, Edad: {$this->edad}";
        }
        
        //------------------------------
        public static function incrementarPersona(){
            self::$cont++;
        }









    }
}