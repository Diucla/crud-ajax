<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/3/2018
 * Time: 8:41 AM
 */

require_once '../_model/Conection.php';
require_once '../_model/Product.php';
$product = new Product();

if($_GET['accao']==1){
    $result = $product->getAll();

    echo json_encode($result[0]);
}else{
    if(isset($_POST)){
        $product->inserir($_POST);

        $result = array("estado"=>true);;
        echo json_encode($result);
    }else{
        echo "denied";
    }
}