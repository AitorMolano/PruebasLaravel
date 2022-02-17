<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Articulo;

class ComentarioController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $comentario = New Comentario;

        $comentario->articulo_id = session('articulos_id');
        $comentario->texto = request('comment');

        $comentario->save();

        echo'<script type="text/javascript"> alert("Comentario enviado correctamente"); </script>';

        $user = Auth::user();
        $articulos = Articulo::all();
        return view('articulos', [
            'articulos' => $articulos,
            'user' => $user,
        ]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
