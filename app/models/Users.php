<?php

namespace MinFrame\Models;
use MinFrame\Core\App;

class Users
{
    public function getAllUsers()
    {
        return App::get('database')->selectAll('users');
    }
}