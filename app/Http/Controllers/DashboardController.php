<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use App\Models\User;
use Auth;
use Flashy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $totalProspects = Prospect::all()->count();
        $totalUsers = User::all()->count();

        Flashy::success('Bienvenue à bord, '. Auth::user()->nom);
        return view ('dashboard', compact('totalProspects', 'totalUsers'));
    }
}
