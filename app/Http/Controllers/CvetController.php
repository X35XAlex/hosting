<?php

namespace App\Http\Controllers;

use App\Cvet;
use Illuminate\Http\Request;



class CvetController extends Controller
{
    public function index()
    {

$Cveta = Cvet::where('use',1)->get();
        foreach ($Cveta as $for) {
            dump($for->color);
            //dump($Cveta->id);
        }
    }
}
