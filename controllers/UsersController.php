<?php


class UsersController {
    public function index ()
    {
        $users= App::get('database')->selectAll('user');

        return view('index', compact('users'));
    }
}