<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Categoria::all();
        return view('categoria.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
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
            'nombre' => 'required'
        ]);
        
        Categoria::create($request->all());
        return redirect()->route('categoria.index')
                        ->with('success','Categoria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Categoria::find($id);
        return view('categoria.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($categoria)
    {
        $categoria = Categoria::find($categoria);
        return view('categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$categoria)
    {
        $request->validate([
            'nombre' => 'required'
        ]);
        $categoria = Categoria::find($categoria);
        $categoria->update($request->all());

        return redirect()->route('categoria.index')
                        ->with('success','Categoria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoria)
    {
        $categoria = Categoria::find($categoria);
        $categoria->delete();    
        return redirect()->route('categoria.index')
                        ->with('success','Categoria deleted successfully');
    }
}
