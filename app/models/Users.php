<?php 

// for database interaction
class Users extends Dbh {

    protected  function getEmployees() {
        $sql = "SELECT * FROM employees";
        $stmt = this->connect()->prepare($sql);
        $stmt->execute();

        $result =  $stmt->fetchAll();
        return $result;
    }


   
}