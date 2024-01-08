<?php

namespace App\Http\Controllers;

use App\Polsovatel;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PolsovatelController extends Controller
{
    public function index()
    {
        // Получить всех пользователей
        $polsovatels = Polsovatel::all();
        // Перебрать каждого пользователя
        foreach ($polsovatels as $polsovatel) { echo '<br>';
            echo($polsovatel);   echo '<br>';
//            echo($polsovatel->family);
//echo($polsovatel->otch);
//echo($polsovatel->age);
//echo($polsovatel->specialization);
//echo($polsovatel->steck);
//echo($polsovatel->city);
//echo($polsovatel->country);
//echo($polsovatel->gender);
//echo($polsovatel->status);
//echo($polsovatel->adress);
//echo($polsovatel->adress);
//echo($polsovatel->tel);
//echo($polsovatel->email);
        }
    }
}



