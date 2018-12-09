<?php
namespace App\Controllers;
use App\Core\App;

class UsersController {
    public function index ()
    {
        $users= App::get('database')->selectAll('user');

        return view('index', compact('users'));
    }


    public function store ()
    {
        App::get('database')->insert('user', [
            'name' => $_POST['name'],
        ]);
        redirect('users');
    }
}