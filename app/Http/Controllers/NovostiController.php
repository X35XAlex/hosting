<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovostiController extends Controller
{
    public function index()
    {
        return'news';
    }
    public function create()
    {

        $table->string('title');
        $table->string('image');
        $table->text('content');
        $table->string('ssylka');
    }
}
