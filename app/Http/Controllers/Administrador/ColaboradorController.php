<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use App\Colaborador;
use App\User;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradores = Colaborador::get();
        return view('colaborador.index',compact('colaboradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('administrador.colaborador.store');
    }
    public function crearColaborador(User $usuario)
    {
        return view('administrador.colaborador.create',compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'require',
            'apellido' => 'require',
            'documento' => 'require',
            'sueldo' => 'require',
            'usuario_id' => 'require',
        ]);
        $colaboradores = new Colaborador();
        $colaboradores->nombre = $data['nombre'];
        $colaboradores->appelido = $data['apellido'];
        $colaboradores->documento = $data['documento'];
        $colaboradores->sueldo = $data['sueldo'];
        $colaboradores->user_id = $data['usuario_id'];
        $colaboradores->save();
        return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaborador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaborador $colaborador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        //
    }
}
