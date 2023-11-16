<?php

namespace Core;

class Authenticator {

    public function attempt($email,$password){

        $query = 'SELECT * from users where email = :email';
        $db = App::resolve(Database::class);
        $user = $db->query($query , ['email' =>$email])->find();

        if($user){
            if(password_verify($password, $user['password'])){
                $this->login(['email' => $email]);
            return true;
        }}
        return false;
    }

    public function login($user){
        $_SESSION['user'] = ['email' => $user['email' ]];
        session_regenerate_id(true);
    }
    
   public function logout(){
        Session::destroy();
        redirect('/');
    }
}