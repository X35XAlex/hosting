<?php

namespace App\Http\Controllers;

use App\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function index()
    {
$tovary = Tovar::all();
foreach ($tovary as $cikltovary){
    dump( "<div class='tovar-single'>
            <h2>$cikltovary->name</h2>
            <img src='$cikltovary->img'/>
            <p>$cikltovary->opis</p>
            <b>$cikltovary->collich</b>
            <a href='$cikltovary->ssylka'>Купить</a>
</div> ");
};
    }
    public function create()
    {
$tovatmassivearr =[
    [
        'collich'=>'1',
        'img'=>'src',
        'name'=>'chashka',
        'cena'=>'220',
        'opis'=>'belaya chashka',
        'ssylka'=>'s5'
    ],
    [
    'collich'=>'12',
    'img'=>'src1',
    'name'=>'chashka1',
    'cena'=>'240',
    'opis'=>'belaya chashka1',
    'ssylka'=>'s6'
],
    ];
foreach ($tovatmassivearr as $item){
    Tovar::create($item);
}


dd('created');
    }
}
