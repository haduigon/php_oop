<?php

class AuthController{

public function createUser(){

  global $smarty;
    $email = $_POST['email'];
    $password = $_POST['password'];
  $user = new UserModel($email,$password);
  $user->create();




}

}
