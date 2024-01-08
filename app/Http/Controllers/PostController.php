<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
     $post = Post::all();
     echo "<br>";
     echo "<div>'$post'</div>";
     echo "<br>";
     dump($post);
    }
    public function create()
    {
$postarr = [
    'title'=>'Pervaya companiya',
    'img'=>'image pervoy',
    'content'=>'Opisanie porvogo meropriatiya',
    'is_published'=>'0',
    ];
Post::create($postarr);
    dd('gotovo');
    }
    public function update()
    {
        $post = Post::find(6);//Обращение к объекту из базы по idвроде как
        $post->update([
            'title'=>'update',
            'img'=>'update',
            'content'=>'update',
            'is_published'=>'0',
            ]);
        dd('updated');
    }
    public function delete()
    {
         $post = Post::find(6);
        $post->delete();
        dd('delete');
    }
    public function restore()
    {
        $post = Post::withTrashed()->find(6);
        $post->restore();
        dd('restored');
    }
    public function firstOrCreate()
    {
        $postanother = Post::find(1);
        $anotherPost = [
            'title'=>'Pervaya companiya->pervaya compania',
            'img'=>'image pervoy->ggggg',
            'content'=>'Opisanie porvogo meropriatiya->sdasd',
            'is_published'=>'0',
        ];
       $post = Post::firstOrCreate([
           'title'=>'Pervaya companiya1fdgdfg'
       ],[
           'img'=>'updateOrCreatecontent',
           'content'=>'updateOrCreate',
           'is_published'=>'0',
        ]);
       dump($post->content);
dd('11');
    }
}
