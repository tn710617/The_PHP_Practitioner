<?php
class Post
{
    public $title;
    public $published;
    public $author;

    public function __construct($title, $published, $author)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }
}

$posts = [
    new Post('My first post',  true,'Ray'),
    new Post('My second post',  true,'TTN'),
    new Post('My third post',  true,'Jett'),
    new Post('My fourth post', false, 'SOJ')
];

$titleOfPosts = array_column($posts, 'title', 'author');
var_dump($titleOfPosts);
