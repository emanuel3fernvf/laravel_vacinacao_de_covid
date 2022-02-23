<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPaciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = ModelPaciente::all()->sortByDesc('created_at');
        return view('paciente_index',compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo=["M","F"];
        return view('paciente_create',compact('sexo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadPac=ModelPaciente::create([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'cns'=>$request->cns,
            'data_nascimento'=>$request->data_nascimento,
            'sexo'=>$request->sexo,
            'nome_da_mae'=>$request->nome_da_mae,
            'grupo_prioritário'=>$request->grupo_prioritário,
            'categoria_grupo_prioritario'=>$request->categoria_grupo_prioritario,
        ]);
        if($cadPac){
            return redirect('pacientes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente=ModelPaciente::find($id);
        $vacina=ModelPaciente::find($id)->relVacinas;
        return view('vacina_index',compact('paciente','vacina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=ModelPaciente::find($id);
        $sexo=["M","F"];
        return view('paciente_create',compact('paciente','sexo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ModelPaciente::where(['id'=>$id])->update([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'cns'=>$request->cns,
            'data_nascimento'=>$request->data_nascimento,
            'sexo'=>$request->sexo,
            'nome_da_mae'=>$request->nome_da_mae,
            'grupo_prioritário'=>$request->grupo_prioritário,
            'categoria_grupo_prioritario'=>$request->categoria_grupo_prioritario,
        ]);
        return redirect('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=ModelPaciente::destroy($id);
        return($del)?'sim':'não';
    }
}
