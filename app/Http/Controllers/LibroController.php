<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
// use Illuminate\Support\Facades\Cache;


class LibroController extends Controller
{
    public function index()
    {
        // dd(session()->all());
        can('listar-libros');
        // Cache::put('prueba', 'Esto es un dato en caché');
        // dd(Cache::get('prueba'));
        // Cache::tags(['permiso'])->put('permiso.1 ',['listar-libros','crear-libros']);
        // dd(Cache::tags('permiso')->get('permiso.1'));
        // Cache::tags(['permiso'])->flush();          // borra solo permiso de mi caché, no borrar prueba;      
        $datas = Libro::orderBy('id')->get();
        return view('libro.index', compact('datas'));
    }

    public function crear()
    {
        can('crear-libros');
        return view('libro.crear');
    }

    public function guardar(Request $request)
    {
        // dd($request->all());
        if ($foto = Libro::setCaratula($request->foto_up))
            $request->request->add(['foto' => $foto]);
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        //
    }

    public function actualizar(Request $request, $id)
    {
        //
    }

    public function eliminar($id)
    {
        //
    }
}
