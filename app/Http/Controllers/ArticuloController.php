<?php

namespace App\Http\Controllers;

use App\Models\User;

Use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {   
        //$articulos = array('Noseque', 'Nosequien', 'Nosecual');
        return view('articulos');
    }

    public function create()
    {
        //return view('createArticulo/');
    }

    public function store(Request $request)
    {
        $articulo = new Articulo;

        $articulo->titulo = request('titulo');
        $articulo->contenido = request('contenido');

        $articulo->save();
    }

    public function show($id)
    {
        //return view('detalleArticulo/');
    }

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

    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
    }
}
