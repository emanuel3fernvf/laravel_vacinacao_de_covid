<?php

namespace App\Http\Controllers;

use App\Models\ModelLote;
use App\Models\ModelPaciente;
use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function searchPaciente(Request $request)
    {

        $filters = $request->except('_token');

        $number = '';

        for ($i = 0; $i < strlen($request->inputSearch); $i++) {
            if (strrpos('1234567890', substr($request->inputSearch, $i, 1)) !== false) {
                $number = $number . substr($request->inputSearch, $i, 1);
            }
        }

        $cpf = substr_replace(substr_replace(substr_replace($number, '.', 3, 0), '.', 7, 0), '-', 11, 0);

        $paciente = ModelPaciente::orWhere('cpf', '=', $cpf)
            ->orWhere('cns', '=', $number)
            ->orWhere('name', 'LIKE', "%{$request->inputSearch}%")
            ->paginate(10);

        return view('paciente_index', compact('paciente', 'filters'));
    }

    public function searchLote(Request $request)
    {

        $filters = $request->except('_token');

        $lote = ModelLote::where('lote', '=', $request->inputSearch)
            ->orWhere('fabricante', '=', $request->inputSearch)
            ->paginate(10);

        return view('lote_index', compact('lote', 'filters'));
    }
}
