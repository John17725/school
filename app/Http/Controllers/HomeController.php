<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function formulario(){
        return view('tables.users');
    }
    public function getAlumnos(){
        return view('tables.listaAlumnos');
    }
    public function saveAlumnos(Request $request){
        dd($request);
    }
}
