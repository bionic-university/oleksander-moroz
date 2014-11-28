<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 16.11.14
 * Time: 14:20
 */
namespace models;
use base\App;

class User {
        public function RegistrationUser($username,$email,$password){
            $pdoStatement = App::$pdo->prepare('INSERT INTO polp SET username = :username,email = :email,password = :password ');
            $pdoStatement->bindParam('username',$username);
            $pdoStatement->bindParam('email',$email);
            $pdoStatement->bindParam('password',$password);
            $pdoStatement->execute();

        }

} 