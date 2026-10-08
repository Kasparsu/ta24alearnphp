<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index()
    {
        $title = 'Posts';
        $posts = Post::all();
        view('posts/index', compact('title', 'posts'));
    }
    public function create(){
        view('posts/create');
    }

    public function store() {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->category = $_POST['category'];
        $post->author = $_POST['author'];
        $post->save();
        redirect('/admin/posts');
    }

    public function view() {
        $post = Post::find($_GET['id']);
        if($post) {
            return view('posts/view', compact('post'));
        }
        echo 404;
    }

    public function edit() {
        $post = Post::find($_GET['id']);
        if($post) {
            return view('posts/edit', compact('post'));
        }
        echo 404;
    }

    public function update(){
        $post = Post::find($_GET['id']);
        if($post) {
            $post->title = $_POST['title'];
            $post->body = $_POST['body'];
            $post->category = $_POST['category'];
            $post->author = $_POST['author'];
            $post->save();
            return redirect('/admin/posts');
        }
        echo 404;
    }

    public function delete() {
        $post = Post::find($_GET['id']);
        if($post) {
           $post->delete();
           return redirect('/admin/posts');
        }
        echo 404;
    }
}
