<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 16.11.14
 * Time: 14:20
 */

class User {
        public function RegistrationUser($username,$email,$password,$pdo){
            $pdoStatement = $pdo->prepare('INSERT INTO Ussers SET username = :username,email = :email,password = :password ');
            $pdoStatement->bindParam('username',$username);
            $pdoStatement->bindParam('email',$email);
            $pdoStatement->bindParam('password',$password);
            $pdoStatement->execute();

        }
        public function GetAllUsers($pdo){
            $pdoStatemant = $pdo->prepare('SELECT * FROM Ussers');
            $pdoStatemant->execute();
            $resul = $pdoStatemant->fetchAll(PDO::FETCH_ASSOC);
            $jsonfile = json_encode($resul);
            echo $jsonfile;
        }

} 