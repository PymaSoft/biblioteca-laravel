<?php

namespace App\Http\Controllers;

use App\Models\LibroPrestamo;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacionLibroPrestamo;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Builder;

class LibroPrestamoController extends Controller
{

    public function index()
    {
        $libros = LibroPrestamo::with('usuario:id,nombre', 'libro')->orderBy('fecha_prestamo')->get();
        // $libros = LibroPrestamo::orderBy('fecha_prestamo')->get();
        // dd($libros); 
        return view('libro-prestamo.index', compact('libros'));
    }

    public function crear()
    {
        $libros = Libro::withCount(['prestamo'  => function (Builder $query) {
            $query->whereNull('fecha_devolucion');
        }])->get()->filter(function ($item, $key){
            return $item->cantidad > $item->prestamo_count;
        })->pluck('titulo', 'id');
        // dd($libros);
        return view('libro-prestamo.crear', compact('libros'));
    }

    public function guardar(ValidacionLibroPrestamo $request)
    {
        // dd($request->all());
        $libro = Libro::findOrFail($request->libro_id);
        $libro->prestamo()->create([
            'prestado_a' => $request->prestado_a,
            'fecha_prestamo' => $request->fecha_prestamo,
            'usuario_id' => auth()->user()->id
        ]);
        return redirect()->route('libro-prestamo')->with('mensaje', 'El libro prestado se registró');
    }

    public function devolucion(Request $request, $libro_id)
    {
        if ($request->ajax()) {
            LibroPrestamo::where('libro_id', $libro_id)
            ->whereNull('fecha_devolucion')
            ->update(['fecha_devolucion' => date('Y-m-d')]);
            return response()->json(['fecha_devolucion' => date('Y-m-d')]);
        } else {
            abort(404);
        }
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
