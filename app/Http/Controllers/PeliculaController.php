<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelicula::with('autor')->with('categoria')->get();
        return view('pelicula.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autor = Autor::all();
        $categorias = Categoria::all();
        return view('pelicula.create',[
            'autor' => $autor,
            'categoria' => $categorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_categoria' => 'required',
            'id_autor' => 'required',
            'nombre' => 'required',
            'fecha_lanzamiento' => 'required',
            'productora' => 'required'
        ]);
    
        Pelicula::create($request->all());
     
        return redirect()->route('pelicula.index')
                        ->with('success','Pelicula created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pelicula::find($id)->with('autor')->with('categoria')->first();
        return view('pelicula.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula  $pelicula)
    {
        $autor = Autor::all();
        $categorias = Categoria::all();
        return view('pelicula.edit',[
            'autor' => $autor,
            'categoria' => $categorias,
            'pelicula' => $pelicula
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pelicula)
    {
        $request->validate([
            'id_categoria' => 'required',
            'id_autor' => 'required',
            'nombre' => 'required',
            'fecha_lanzamiento' => 'required',
            'productora' => 'required'
        ]);
        $pelicula = Pelicula::find($pelicula);
        $pelicula->update($request->all());
     
        return redirect()->route('pelicula.index')
                        ->with('success','Pelicula edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();    
        return redirect()->route('pelicula.index')
                        ->with('success','Pelicula deleted successfully');
    }
}
