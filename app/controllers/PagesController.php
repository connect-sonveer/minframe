<?php

namespace MinFrame\Controllers;
use MinFrame\Models\Users;

class PagesController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new Users;
    }
    
    public function home()
    {
        $userlist = $this->userModel->getAllUsers();
        return view('index',['users' => $userlist, 'page_title' => 'Minframe']);
    }

    public function about()
    {
        return view('about',['page_title' => 'Minframe/About']);
    }

    public function contact()
    {
        return view('contact',['page_title' => 'Minframe/Contact']);
    }
}