<?php

namespace App\Http\Controllers;
use App\Models\Alumnos;
use App\Models\ReportesAlumnos;

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
        $alumnos = Alumnos::all();
        // dd($alumnos);
        return view('tables.listaAlumnos', compact('alumnos'));
    }
    public function makeReport($id){
        $alumno = Alumnos::find($id);
        return view('tables.report', compact('alumno'));
    }
    public function saveReport(Request $request){
        $reporte = new ReportesAlumnos();
        $reporte->alumno_id = (int) $request->id_alumno;
        $reporte->nombre_profesor = $request->nombre_profesor;
        $reporte->materia = $request->materia;
        $reporte->observaciones = $request->observaciones;
        $reporte->save();
        return redirect()->route('alumnosList');
    }
    public function saveAlumnos(Request $request){
        $alumno = new Alumnos();
        $alumno->Nombre = $request->nombre;
        $alumno->Apellidos = $request->apellidos;
        $alumno->Edad = (int) $request->edad;
        $alumno->Grado = (int) $request->grado;
        $alumno->Grupo = $request->grupo;
        $alumno->save();
        return redirect()->route('home');
    }

    public function getReportAlumno($id){
        $reportes = ReportesAlumnos::where('alumno_id','=',$id)->get();
        $alumno = Alumnos::find($id);
        // dd($reportes);
        return view('tables.listaReporteAlumno', compact('reportes','alumno'));
    }
}
