<?php

class userDAO {

    private $Db;

    function __construct($DB_CON)
    {
        $this->Db = $DB_CON;
    }

    public function addUser($telefono, $nombre, $calle, $numero, $colonia, $ciudad, $cpostal, $email, $user, $pass){
        try{
            $statement = $this->Db->prepare("INSERT INTO user(telefono, nombre, calle, numero, colonia, ciudad, cpostal, email, user, pass) VALUES (:tel,:nom,:cal,:num,:col,:ciu,:cpo,:ema,:use,:pas)");
            $statement->bindparam(":tel", $telefono);
            $statement->bindparam(":nom", $nombre);
            $statement->bindparam(":cal", $calle);
            $statement->bindparam(":num", $numero);
            $statement->bindparam(":col", $colonia);
            $statement->bindparam(":ciu", $ciudad);
            $statement->bindparam(":cpo", $cpostal);
            $statement->bindparam(":ema", $email);
            $statement->bindparam(":use", $user);
            $statement->bindparam(":pas", $pass);
            $statement->execute();   
            return true;
        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    }

    public function getUser($user, $pass){
        try{
            $statement = $this->Db->prepare("SELECT * FROM user WHERE user=:user and pass=:pass");
            $statement->bindparam(":user", $user);
            $statement->bindparam(":pass", $pass);
            $statement->execute();
            $dataRows = $statement->fetch(PDO::FETCH_ASSOC);
            return $dataRows;

        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    }   
}
