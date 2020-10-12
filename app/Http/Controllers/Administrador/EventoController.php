<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Evento::latest()->paginate(10);
        return view('administrador.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required',
            'precio_total' => 'required|numeric',
            'descuento' => 'required|numeric',

            'imagen' => 'required|mimes:png,jpg,jpeg',
            'cupos' => 'required|integer',
            'fecha_inicio' => 'required|date'
        ]);

        $evento= new Evento();
        $evento->nombre=$data['nombre'];
        $evento->descripcion=$data['descripcion'];
        $evento->precio_total=$data['precio_total'];
        $evento->descuento=$data['descuento'];
        $evento->precio_colaborador=$data['precio_total']-$data['descuento'];
        $evento->estado=true;
        $evento->cupos=$data['cupos'];
        $evento->existencia=$data['cupos'];
        $evento->fecha_inicio=$data['fecha_inicio'];


        $archivo=$request->file('imagen');
        $nombreArchivo=time().'.'.$request->file('imagen')->extension();
        $ubicacion=public_path('/storage/eventos');
        $archivo->move($ubicacion,$nombreArchivo);

        $evento->imagen=$nombreArchivo;
        $evento->save();

        return redirect()->route('eventos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('administrador.eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('administrador.eventos.edit', compact('evento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
    }
    public function estado(Request $request, Evento $evento)
    {
       return response()->json($request);
    }
}
