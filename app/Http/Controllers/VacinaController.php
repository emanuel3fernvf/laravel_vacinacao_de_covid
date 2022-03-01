<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacinaRequest;
use Illuminate\Http\Request;
use App\Models\ModelVacina;
use App\Models\ModelPaciente;
use App\Models\ModelLote;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacina = ModelVacina::orderByDesc('created_at')->paginate(10);
        return view('vacina_index', compact('vacina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ModelPaciente $paciente)
    {
        $lotes = ModelLote::all();
        $dose = ["D1", "D2", "D3", "D4"];
        return view('vacina_create', compact('paciente', 'lotes', 'dose'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacinaRequest $request)
    {

        /*$dosesPaciente = ModelPaciente::find($request->id_paciente)->relVacinas;

        foreach ($dosesPaciente as $vacina) {
            if ($vacina->dose === $request->dose) {
                return false;
            }
        }*/

        $cadVac = ModelVacina::create([
            'id_paciente' => $request->id_paciente,
            'id_lote' => $request->id_lote,
            'data_da_vacina' => $request->data_da_vacina,
            'dose' => $request->dose,
            'vacinador' => $request->vacinador,
            'unidade_de_vacinacao' => $request->unidade_de_vacinacao,
        ]);
        if ($cadVac) {
            return redirect('pacientes/' . $request->id_paciente);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacina = ModelVacina::find($id);
        $lotes = ModelLote::all();
        $dose = ["D1", "D2", "D3", "D4"];
        return view('vacina_create', compact('vacina', 'lotes', 'dose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VacinaRequest $request, $id)
    {
        ModelVacina::where(['id' => $id])->update([
            'id_paciente' => $request->id_paciente,
            'id_lote' => $request->id_lote,
            'data_da_vacina' => $request->data_da_vacina,
            'dose' => $request->dose,
            'vacinador' => $request->vacinador,
            'unidade_de_vacinacao' => $request->unidade_de_vacinacao,
        ]);
        return redirect('pacientes/' . $request->id_paciente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = ModelVacina::destroy($id);
        return ($del) ? 'sim' : 'não';
    }
}
