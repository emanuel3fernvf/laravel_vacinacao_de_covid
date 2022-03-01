<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use Illuminate\Http\Request;
use App\Models\ModelPaciente;
use App\Models\ModelVacina;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = ModelPaciente::orderByDesc('created_at')->paginate(10);
        return view('paciente_index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo = ["M", "F"];
        return view('paciente_create', compact('sexo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteRequest $request)
    {

        $cns = '';
        $cpf = '';

        for ($i = 0; $i < strlen($request->cns); $i++) {
            if (strrpos('1234567890', substr($request->cns, $i, 1)) !== false) {
                $cns = $cns . substr($request->cns, $i, 1);
            }
        }

        for ($i = 0; $i < strlen($request->cpf); $i++) {
            if (strrpos('1234567890', substr($request->cpf, $i, 1)) !== false) {
                $cpf = $cpf . substr($request->cpf, $i, 1);
            }
        }

        $cpf = substr_replace(substr_replace(substr_replace($cpf, '.', 3, 0), '.', 7, 0), '-', 11, 0);

        $cadPac = ModelPaciente::create([
            'name' => $request->name,
            'cpf' => $cpf,
            'cns' => $cns,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'nome_da_mae' => $request->nome_da_mae,
            'grupo_prioritário' => $request->grupo_prioritário,
            'categoria_grupo_prioritario' => $request->categoria_grupo_prioritario,
        ]);
        if ($cadPac) {
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
        $paciente = ModelPaciente::find($id);
        $vacina = ModelVacina::where('id_paciente', $id)->paginate(10);
        return view('vacina_index', compact('paciente', 'vacina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = ModelPaciente::find($id);
        $sexo = ["M", "F"];
        return view('paciente_create', compact('paciente', 'sexo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request, $id)
    {

        $cns = '';
        $cpf = '';

        for ($i = 0; $i < strlen($request->cns); $i++) {
            if (strrpos('1234567890', substr($request->cns, $i, 1)) !== false) {
                $cns = $cns . substr($request->cns, $i, 1);
            }
        }

        for ($i = 0; $i < strlen($request->cpf); $i++) {
            if (strrpos('1234567890', substr($request->cpf, $i, 1)) !== false) {
                $cpf = $cpf . substr($request->cpf, $i, 1);
            }
        }

        $cpf = substr_replace(substr_replace(substr_replace($cpf, '.', 3, 0), '.', 7, 0), '-', 11, 0);

        ModelPaciente::where(['id' => $id])->update([
            'name' => $request->name,
            'cpf' => $cpf,
            'cns' => $cns,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'nome_da_mae' => $request->nome_da_mae,
            'grupo_prioritário' => $request->grupo_prioritário,
            'categoria_grupo_prioritario' => $request->categoria_grupo_prioritario,
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
        $del = ModelPaciente::destroy($id);
        return ($del) ? 'sim' : 'não';
    }
}
