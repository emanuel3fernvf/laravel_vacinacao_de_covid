@extends('templates.template')

@section('content')
    <div class="col-10 m-auto">
        <form class="row g-3 m-auto" name="formSearch" id="formSearch" method="get" action="">
            <div class="p-0">
                <a href="{{url("pacientes/create")}}">
                    <input type="button" class="btn btn-primary" value="Cadastrar novo paciente">
                </a>
            </div>
            <table class="table shadow mb-5">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CNS</th>
                    <th scope="col">DN</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nome da mãe</th>
                    <th scope="col">Vac/Edt/Exc</th>
                </tr>
                </thead>
                <tbody>
                @foreach($paciente as $pacientes)
                    <tr>
                        <td>{{$pacientes->name}}</td>
                        <td>{{$pacientes->cpf}}</td>
                        <td>{{$pacientes->cns}}</td>
                        <td>{{date('d/m/Y',strtotime($pacientes->data_nascimento))}}</td>
                        <td>{{$pacientes->sexo}}</td>
                        <td>{{$pacientes->nome_da_mae}}</td>
                        <td>
                            <a class="btn btn-primary btnSvgPai" href="{{url("pacientes/$pacientes->id")}}">
                                
                                    <svg class="btnSvg" viewBox="0 0 183 205" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5 23C39.0198 15.8282 41.7264 12.898 50.5 9.5H73.5V5L78 1H106L110.5 5V9.5H132.5C141.194 12.7833 144.143 15.6809 145.5 23C165.895 25.3995 174.384 31.5595 182.5 54V172C177.212 191.091 170.722 198.972 148.5 204.5H34.5C13.4858 199.17 6.38313 191.83 1 172V54C10.186 31.0717 18.8297 25.1354 38.5 23ZM145.5 43H38.5V39.5C29.9272 38.9341 25.2107 41.8819 17 54V172C20.7804 181.295 24.1841 185.227 34.5 188H148.5C158.881 185.789 162.665 181.772 167.5 172V54C159.823 42.9149 154.926 40.2109 145.5 39.5V43ZM44 82V92H139.5V82H44ZM44 100V110.5H139.5V100H44ZM44 118.5V128.5H139.5V118.5H44ZM44 136V146H139.5V136H44ZM44 154V164H104.5V154H44Z" fill="white" stroke="white"/>
                                    </svg> Abrir
                                
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </form>

    </div>
@endsection
