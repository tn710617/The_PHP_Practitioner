<?php


class PagesController {
    public function home ()
    {
        $users= App::get('database')->selectAll('user');

        require_once 'view/index.view.php';
    }

    public function contact ()
    {
        require_once 'view/contact.view.php';
    }

    public function about ()
    {
        require_once 'view/about.view.php';
    }
}