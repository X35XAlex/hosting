<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
public $someProperty;
protected $table = 'Portfolios';//Это принудительное использование базы данных подвязка
}
