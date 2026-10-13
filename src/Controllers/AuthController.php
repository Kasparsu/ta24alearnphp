<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm() {
        view('auth/register');        
    }
    public function register() {
        $users = User::where('email', $_POST['email']);
        if($users || $_POST['password'] !== $_POST['password_confirm']){
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['name'] . $_POST['email'] . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
        $user->save();
        redirect('/login');
    }
    public function loginForm() {
        view('auth/login');
    }
    public function login() {
        $users = User::where('email', $_POST['email']);
        $user = $users ? $users[0] : null;
        if(!$user || !password_verify($_POST['name'] . $_POST['email'] . $_POST['password'] . md5('yolo'), $user->password)) {
            return redirect('/login');
        }
        $_SESSION['userID'] = $user->id;
        redirect('/');
    }
    public function logout() {
        unset($_SESSION['userID']);
        redirect('/');
    }
}
