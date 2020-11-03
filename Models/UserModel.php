<?php

class UserModel{

    public $email;
    public $password;

    public function create(){
        $db = DB::getInstance();
        $db->query("
        INSERT INTO users (email,password) 
        VALUES email = '{$this->email}',
        password ='{$this->password}'
        ");
      //  return empty($db->error);

    }


}
