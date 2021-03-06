@extends('templates.template')

@section('content')

    <script>
        document.getElementById("pacienteLink").classList.toggle("btn-dark");
    </script>

    <div class="col-8 m-auto mt-3 mb-5 shadow shadow-lg p-3">
        <h4>@if(isset($paciente)) Editar paciente @else Cadastro de novo paciente @endif</h4>
        @if(isset($paciente))
            <form class="row g-3 border mt-4 mb-4 align-items-center" name="formPacEdit" id="formPacEdit" method="post" action="{{url("pacientes/$paciente->id")}}">
                @method('PUT')
            @else
        <form class="row g-3 border mt-4 mb-4 align-items-center" name="formPac" id="formPac" method="post" action="{{url("pacientes")}}">
            @endif
            @csrf
            <div class="col-md-12">
                <label for="name" class="form-label">Nome:</label>
                <input class="form-control m-auto @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Digite o nome:" value="{{$paciente->name ?? ''}}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="cpf" class="form-label">CPF:</label>
                <input class="form-control m-auto @error('cpf') is-invalid @enderror" type="text" name="cpf" id="cpf" placeholder="Digite o CPF:" value="{{$paciente->cpf ?? ''}}" required>
                @error('cpf')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="cns" class="form-label">CNS:</label>
                <input class="form-control m-auto" type="text" name="cns" id="cns" placeholder="Digite o CNS:" value="{{$paciente->cns ?? ''}}" required>
            </div>
            <div class="col-md-8">
                <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                <input class="form-control m-auto" type="date" name="data_nascimento" id="data_nascimento" placeholder="Digite a DN:" value="{{isset($paciente->data_nascimento) ? date('Y-m-d',strtotime($paciente->data_nascimento)) : ''}}" required>
            </div>
            <div class="col-md-4">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-control m-auto" type="text" name="sexo" id="sexo" placeholder="Selecione o sexo" required>
                    <option value="{{$paciente->sexo ?? ''}}">{{$paciente->sexo ?? ''}}</option>
                    @foreach($sexo as $sexos)
                        <option value="{{$sexos}}">{{$sexos}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="nome_da_mae" class="form-label">Nome da m??e:</label>
                <input class="form-control m-auto" type="text" name="nome_da_mae" id="nome_da_mae" placeholder="Digite o nome da m??e:" value="{{$paciente->nome_da_mae ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="grupo_priorit??rio" class="form-label">Grupo priorit??rio:</label>
                <input class="form-control m-auto" type="text" name="grupo_priorit??rio" id="grupo_priorit??rio" placeholder="Selecione o grupo priorit??rio:" value="{{$paciente->grupo_priorit??rio ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="categoria_grupo_prioritario" class="form-label">Categoria do grupo priorit??rio:</label>
                <input class="form-control m-auto" type="text" name="categoria_grupo_prioritario" id="categoria_grupo_prioritario" placeholder="Selecione a categoria do grupo priorit??rio:" value="{{$paciente->categoria_grupo_prioritario ?? ''}}" required>
            </div>
            <div class="col-md-12">
                <input class="btn btn-primary m-auto" type="submit" value="@if(isset($paciente)) Editar @else Cadastrar @endif">
            </div>
        </form>
    </div>
@endsection
