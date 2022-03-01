@extends('templates.template')

@section('content')

    <script>
        document.getElementById("vacinaLink").classList.toggle("btn-dark");
    </script>

    <div class="col-8 m-auto mt-3 mb-5 shadow shadow-lg p-3">


        @if(isset($vacina))
            @php
                $paciente=$vacina->relPacientes;
                $vacina_lote=$vacina->relLotes;
            @endphp
        @endif


        @if(isset($paciente))

            <div class="col-md-12 p-2 border shadow mb-5">
                <div><h4>Dados do Paciente:</h4></div>
                <div class="d-flex flex-row bd-highlight">
                    <div class="me-2 bd-highlight"><b>Nome: </b></div>
                    <div class="me-2 bd-highlight">{{$paciente->name}}</div>
                </div>
                <div class="d-flex flex-row bd-highlight">
                    <div class="me-2 bd-highlight"><b>CPF: </b></div><div class="me-2 bd-highlight">{{$paciente->cpf}}</div>
                    <div class="me-2 bd-highlight"><b>CNS: </b></div><div class="me-2 bd-highlight">{{$paciente->cns}}</div>
                </div>
                <div class="d-flex flex-row bd-highlight">
                    <div class="me-2 bd-highlight"><b>Dn: </b></div><div class="me-2 bd-highlight">{{date('d/m/Y',strtotime($paciente->data_nascimento))}}</div>
                    <div class="me-2 bd-highlight"><b>Sexo: </b></div><div class="me-2 bd-highlight">{{$paciente->sexo}}</div>
                    <div class="me-2 bd-highlight"><b>Mãe: </b></div><div class="me-2 bd-highlight">{{$paciente->nome_da_mae}}</div>
                </div>
            </div>
        @endif

            <h4>@if(isset($vacina)) Editar vacina @else Cadastro de nova vacina @endif</h4>
            @if(isset($vacina))
                <form class="row g-3 align-items-center border mt-2 p-2" name="formVacEdit" id="formVacEdit" method="post" action="{{url("vacinas/$vacina->id")}}">
                    @method('PUT')
            @else
                <form class="row g-3 align-items-center border mt-2 p-2" name="formCadVac" id="formCadVac" method="post" action="{{url("pacientes/$paciente->id/vacinas")}}">
            @endif

            @csrf

            <div class="col-md-6">
                <label for="lote" class="form-label">Lote:</label>
                <input class="form-control m-auto" type="text" name="lote" id="lote" list="loteList" value="{{$vacina_lote->lote ?? ''}}" required>

                    <datalist id="loteList">

                    @foreach($lotes as $lote)
                        <option label="{{$lote->fabricante}}" id="{{$lote->id}}" value="{{$lote->lote}}"></option>
                    @endforeach

                    </datalist>

                </input>
            </div>
            <div class="col-md-6">
                <label for="fabricante" class="form-label">Fabricante:</label>
                <input class="form-control m-auto" type="text" name="fabricante" id="fabricante" value="{{$vacina_lote->fabricante ?? ''}}" disabled>
                <input class="form-control m-auto" type="text" name="id_lote" id="id_lote" value="{{$vacina->id_lote ?? ''}}" style="display: none" required>
                <input class="form-control m-auto" type="text" name="id_paciente" id="id_paciente" value="{{$paciente->id}}" style="display: none" required>
            </div>
            <div class="col-md-6">
                <label for="data_da_vacina" class="form-label">Data:</label>
                <input class="form-control m-auto" type="date" name="data_da_vacina" id="data_da_vacina" placeholder="Digite a data:" value="{{isset($vacina->data_da_vacina) ? date('Y-m-d',strtotime($vacina->data_da_vacina)) : ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="dose" class="form-label">Dose:</label>
                <select class="form-control m-auto @error('dose') is-invalid @enderror" type="text" name="dose" id="dose" placeholder="Selecione a dose:" value="{{$vacina->dose ?? ''}}" required>
                <option value="{{$vacina->dose ?? ''}}">{{$vacina->dose ?? ''}}</option>
                    @foreach($dose as $doses)
                        <option value="{{$doses}}">{{$doses}}</option>
                    @endforeach
                </select>
                @error('dose')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="vacinador" class="form-label">Vacinador:</label>
                <input class="form-control m-auto" type="text" name="vacinador" id="vacinador" placeholder="Selecione o digitador:" value="{{$vacina->vacinador ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="unidade_de_vacinacao" class="form-label">Unidade:</label>
                <input class="form-control m-auto" type="text" name="unidade_de_vacinacao" id="unidade_de_vacinacao" placeholder="Digite o local da vacina:" value="{{$vacina->unidade_de_vacinacao ?? ''}}" required>
            </div>
            <div class="col-md-12">
                <input class="btn btn-primary m-auto" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>

    <script>
        function qs(query, context) {
            return (context || document).querySelector(query);
        }

        function qsa(query, context) {
            return (context || document).querySelectorAll(query);
        }

        qs("#lote").addEventListener('change', function (e) {

            var options = qsa('#' + e.target.getAttribute('list') + ' > option'),
                lotes = [],fabricantes = [],ids = [];

            [].forEach.call(options, function (option) {
                    lotes.push(option.value);
                    fabricantes.push(option.label);
                    ids.push(option.id);
            });

            var indexLote = lotes.indexOf(e.target.value);



            if (indexLote !== -1) {
                qs("#fabricante").value = fabricantes[indexLote];
                qs('#id_lote').value = ids[indexLote];
            }

        });
    </script>
@endsection
