<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionLibro;
use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Storage;

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
            // dd($request->all());
            Libro::create($request->all());
            return redirect()->route('libro')->with('mensaje', 'El libro se creó correctamente');
    }

    public function ver(Request $request, Libro $libro)
    {
        // dd($libro);
        if ($request->ajax()) {
            return view('libro.ver', compact('libro'));
        } else {
            abort(404);
        }
    }

    public function editar($id)
    {
        $data = Libro::findOrFail($id);
        return view('libro.editar', compact('data'));
    }

    public function actualizar(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        if ($foto = Libro::setCaratula($request->foto_up, $libro->foto))
            $request->request->add(['foto' => $foto]);
        $libro->update($request->all());
        return redirect()->route('libro')->with('mensaje', 'El libro se actualizó correctamente');
    }

    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            $libro = Libro::findOrFail($id);
            if (Libro::destroy($id)) {
                Storage::disk('public')->delete("imagenes/caratulas/$libro->foto");
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
