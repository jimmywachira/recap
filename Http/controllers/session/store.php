<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes =
        ['email'=>$_POST['email'], 
        'password'=>$_POST['password']]);

$signedIn = (new Authenticator)->attempt(
        $attributes['email'], $attributes['password']);

if(!$signedInsign){
   $form->error('email', 'no matching account found for tht email and password!')
   ->throw();
};

$_SESSION['_flashed']['errors'] = $form->errors();

return redirect('/login');