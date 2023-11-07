<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
   function getListe(){

    $taches=Tache::all();
    return view('taches',["taches"=>$taches]);
   }
}
