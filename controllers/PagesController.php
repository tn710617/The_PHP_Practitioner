<?php


class PagesController {
    public function home ()
    {
        return view('home');
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