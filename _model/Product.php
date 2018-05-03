<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/3/2018
 * Time: 8:43 AM
 */
class Product
{
    private $id;
    private $description;
    private $price;

    function __construct() {

    }

    function Bairro() {

    }

    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrice() {
        return $this->price;
    }


    function setDescription($description) {
        $this->description = $description;
    }


    function setPrice($price) {
        $this->price = $price;
    }


    public  function inserir($produto){

        try {
            $con = new Conexao();

            $description = $produto['description'] ;
            $price = $produto['price'] ;

            $rst = $con->conectar()->prepare("INSERT INTO `produto`(`description`,`price`)VALUES(?,?)");
            $rst->bindParam(1,$description,  PDO::PARAM_STR);
            $rst->bindParam(2,$price,  PDO::PARAM_STR);

            if($rst->execute()){
                $ultimoRegisto = $con->prepare("SELECT *
               FROM produto;
               ");
//                return
            }  else {
                return 'error';
            }} catch (Exception $ex) {

        }
    }



    public  function getAll(){
        try {
            $con = new Conexao();
            $membros = $con->conectar()->prepare("SELECT *
               FROM produto;
               ");
            $membros->execute();
            return $membros->fetchAll();
        } catch (Exception $ex) {

        }
    }
    public  function getByName($nome){
        $designacao1 = $nome;
        try {
            $con = new Conexao();
            $membro = $con->conectar()->prepare("SELECT idBairro
               FROM `produto`
               WHERE 'description' = ?");
            $membro->bindParam(1,$designacao1,  PDO::PARAM_INT);
            $membro->execute();
            return $membro->fetch();
        } catch (Exception $ex) {

        }
    }


}