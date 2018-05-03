<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conectar
 *
 * @author Hercilio
 */
class Conexao2 {
    
    
    private $database ;
    private $user ;
    private $pass;
    private $conection;
    
    
            function __construct() {
        $this->database = "mysql:dbname=sistemarh;host=localhost";
        $this->user = "root";
        $this->pass =  "1234";
    }


    public function conectar(){
    
        try {

             $conection = new PDO("mysql:dbname=sistemarh;host=localhost","root","1234");
             return $conection;
        } catch (PDOException $ex) {
            
            print_r($ex);
        }
    }
    
    public function desconectar(){
        try {
             $conection = null;
        } catch (Exception $ex) {
            
        }
    }


}

