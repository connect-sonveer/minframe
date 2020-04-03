<?php

namespace MinFrame\Controllers;
use MinFrame\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users',[
            'fullname' => $_POST['fullname'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'password' => $_POST['pwd']
        ]);

        return redirect('/');
    }
}
