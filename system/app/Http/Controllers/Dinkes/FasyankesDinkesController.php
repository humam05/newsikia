<?php

namespace App\Http\Controllers\Dinkes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasyankesDinkesController extends Controller
{
    function index()
    {
        return view ('dinkes.fasyankes.index');
    }
}
