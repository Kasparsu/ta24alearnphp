<?php

namespace App\Controllers;

class AuthController
{
    public function registerForm() {
        session_start();
        dump(60 * 60 * 24 * 30);
        setcookie('mycookie', 'tasty', time() + 60 * 60 * 24 * 30);
        dump($_COOKIE);
        //$_SESSION['secret'] = 'shhhs';
        dump($_SESSION);
        
    }
    public function register() {

    }
    public function loginForm() {

    }
    public function login() {

    }
    public function logout() {

    }
}
