<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class TestyController extends Controller
{
    public function index()
    {
$Portfolio = Portfolio::find(1);
dump($Portfolio);
dump($Portfolio->Opisanie);
        dump($Portfolio->Kompaniya);
        $str3 = 'protected $table = Portfolios//Это принудительное использование базы данных подвязка';
        dump($str3);
        $str2 = 'это str2';
        dump($str2);
        echo'это эхо после dump($str2)';
$str1 = 'String, то то на рускком, это закончится точкой. А это запятой потом точкой,. здесь я использую dd($str)';
dd($str1);

    }
}
