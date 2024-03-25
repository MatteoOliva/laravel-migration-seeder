<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index (){
        $trains = Train::whereDate('departure _time',today()->toDateString())->get();
        dd($trains);
        return view('home');    
    }
  
}
