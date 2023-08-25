<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role_id == 0){
            $mahasiswa  = User::where("role_id", 1)->get();
            return view('home', ['mahasiswa' => $mahasiswa]);
        }
        else{
            return view('home');
        }

    }

    public function roleCheck()
    {
        if(Auth::user()->role_id == 0){
            $mahasiswa  = User::where("role_id", 1);
            return redirect()->route('home', ['mahasiswa' => $mahasiswa]);
        }
        if(Auth::user()->role_id == 1){
            if(!Auth::user()->mahasiswa){
                return redirect()->route('mahasiswa.create');
            }
            return redirect()->route('home');
        }
    }
}
