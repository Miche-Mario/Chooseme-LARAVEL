<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index(){
        //$totalProspect=Prospect::count();

       // return view('welcome')->with(['totalProspect'=>$totalProspect]);
    }
}
