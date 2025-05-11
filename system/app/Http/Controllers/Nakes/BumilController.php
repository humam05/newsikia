<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BumilController extends Controller
{
   function identitas()
   {
    return view('nakes.ibu_hamil.identitas.index');
   }

   function hpl()
   {
    return view('nakes.ibu_hamil.hpl');
   }

   function periksa()
   {
    return view('nakes.ibu_hamil.periksa.index');
   }
}
