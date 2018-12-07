<?php


class PagesController {
    public function home ()
    {
        $users= App::get('database')->selectAll('user');

        return view('index');
    }

    public function contact ()
    {
        return view('contact');
    }

    public function about ()
    {
        return view('about');
    }
}