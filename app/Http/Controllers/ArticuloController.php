<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
Use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $articulos = Articulo::all();

        return view('articulos', [
            'articulos' => $articulos,
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('createArticulo');
    }

    public function store(Request $request)
    {
        $articulo = new Articulo;

        $articulo->titulo = request('titulo');
        $articulo->contenido = request('contenido');

        $articulo->save();

        echo'<script type="text/javascript"> alert("Articulo creado correctamente"); </script>';

        $user = Auth::user();
        $articulos = Articulo::all();

        return view('articulos', [
            'articulos' => $articulos,
            'user' => $user,
        ]);
    }

    public function show($id)
    {
        $articulo = Articulo::find($id);
        $comentarios = $articulo->comentarios;
        session(['articulos_id' => $id]);
        return view('detalleArticulo', [
            'articulo' => $articulo,
            'comentarios' => $comentarios,
        ]);
    }
/*
    public function edit($id)
    {
        //return view('editarArticulo/');
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);

        $articulo->titulo = request('titulo');
        $articulo->contenido = request('contenido');

        $articulo->save();
    }
*/
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
    }
}
