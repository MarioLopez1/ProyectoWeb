<?php

class carritoDAO {

    private $Db;

    function __construct($DB_CON)
    {
        $this->Db = $DB_CON;
    }

    public function addPedido($user, $producto, $cantidad, $precio){
        try{
            $statement = $this->Db->prepare("INSERT INTO carrito(user, producto, cantidad, precio) VALUES (:use, :pro,:can, :pre)");
            $statement->bindparam(":use", $user);
            $statement->bindparam(":pro", $producto);
            $statement->bindparam(":can", $cantidad);
            $statement->bindparam(":pre", $precio);
            $statement->execute();   
            return true;
        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    }

    public function getPedido($user){
        try{
            $statement = $this->Db->prepare("SELECT * FROM carrito WHERE user=:user");
            $statement->bindparam(":user", $user);
            $statement->execute();
            $dataRows = $statement->fetch(PDO::FETCH_ASSOC);
            return $dataRows;

        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    } 

    public function eliminarPedido($user, $producto){
        try{
            $statement = $this->Db->prepare("DELETE FROM carrito WHERE user=:user and producto=:producto");
            $statement->bindparam(":user", $user);
            $statement->bindparam(":producto", $producto);
            $statement->execute();
            //$dataRows = $statement->fetch(PDO::FETCH_ASSOC);
            //return $dataRows;

        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    } 
}