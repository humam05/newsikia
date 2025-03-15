<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BumilController extends Controller
{
   function index()
   {
    return view('nakes.ibu_hamil.index');
   }

   function hpl()
   {
    return view('nakes.ibu_hamil.hpl');
   }
}
