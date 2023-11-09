<?php

namespace Core;

class Session{

    public static function has($key, $value){

        return (bool) static::get($key);
     }

    public static function put($key, $value){

        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null){
        if(isset($_SESSION['_flash'][$key])){
            return $_SESSION['_flash'][$key];
        }
        return $_SESSION[$key] ?? $default;
    }

    public static function flash($key, $value){
        $_SESSION['_flash'][$key] = $value;
    }

    public static function flush(){
        return $_SESSION=[];
    }

    public static function unflash(){
        unset($_SESSION['_flash']);
    }

    public static function destroy(){

        self::flush();
        session_destroy();
    
        $params = session_get_cookie_params();
    
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], 
        $params['domain'], $params['secure'], $params['httponly']);
    
    }
}