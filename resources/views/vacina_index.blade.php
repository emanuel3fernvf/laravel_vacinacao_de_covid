@extends('templates.template')

@section('content')

    <div class="col-10 m-auto mt-2">
        @csrf
            @if(isset($paciente))

                <div class="col-md-12 p-2 border shadow mb-5" style="position: relative;">
                    <div><h4>Dados do Paciente:</h4></div>
                    <div class="d-flex flex-row bd-highlight">
                        <div class="me-2 bd-highlight"><b>Nome: </b></div>
                        <div class="me-2 bd-highlight">{{$paciente->name}}</div>
                    </div>
                    <div class="d-flex flex-row bd-highlight">
                        <div class="me-2 bd-highlight"><b>CPF: </b></div><div class="me-2 bd-highlight">
                        {{$paciente->cpf}}</div>
                        <div class="me-2 bd-highlight"><b>CNS: </b></div><div class="me-2 bd-highlight">{{$paciente->cns}}</div>
                    </div>
                    <div class="d-flex flex-row bd-highlight">
                        <div class="me-2 bd-highlight"><b>Dn: </b></div><div class="me-2 bd-highlight">{{date('d/m/Y',strtotime($paciente->data_nascimento))}}</div>
                        <div class="me-2 bd-highlight"><b>Sexo: </b></div><div class="me-2 bd-highlight">{{$paciente->sexo}}</div>
                        <div class="me-2 bd-highlight"><b>Mãe: </b></div><div class="me-2 bd-highlight">{{$paciente->nome_da_mae}}</div>

                    </div>
                    <div class="actionsPac">
                        <a href="{{url("pacientes/$paciente->id/edit")}}">
                            <button class="m-2 btn btn-primary btnSvgPai">
                                <svg class="btnSvg" viewBox="0 0 244 245" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42 44.5H140C148.575 36.3474 150.013 31.6041 140 22.5H42C17.6461 32.8269 7.52796 42.1023 0.5 69.5V197.5C8.3418 226.348 17.2062 236.802 42 244H179.5C209.916 236.825 218.612 226.16 222 197.5V108C213.018 96.346 207.982 97.3158 199 108V197.5C197.659 214.242 192.895 218.915 179.5 221.5H42C31.8037 218.695 28.1658 212.53 23.5 197.5V69.5C24.8002 56.7332 29.0721 51.3724 42 44.5Z" fill="white" stroke="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M80.5 129.5L194 6C204.826 0.978686 210.874 -0.851288 221.5 3C230.962 7.18383 235.383 11.1805 241.5 21.5C243.902 31.9684 243.417 37.8794 239 48.5L125 172.5L82.5 190.5C71.2163 189.078 67.8356 185.342 66 174.5L80.5 129.5ZM114.5 126L208.5 23.5C220.369 22.1536 222.521 25.2699 221.5 35L128.5 138.5L114.5 126ZM114.5 154L100 141.5L93 163.5L114.5 154Z" fill="white" stroke="white"/>
                                </svg> Editar Paciente
                            </button>
                        </a>
                        <a href="{{url("pacientes/$paciente->id")}}" onclick="confirmDelPac(event)">
                            <button class="m-2 btn btn-danger btnSvgPai">
                                <svg class="btnSvg" viewBox="0 0 161 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M56.7102 23H25.7102C17.3769 26.533 14.4555 29.4569 11.7102 36V49.5C8.6384 49.8631 6.90355 50.2348 3.71017 52C0.157965 56.2956 0.0357728 58.7045 3.71017 63L11.7102 66L16.2102 191C19.5013 200.054 22.6206 203.64 31.2102 206.5H129.21C139.291 203.199 143.082 199.936 145.71 191L150.71 66C154.518 64.8596 156.364 64.2119 157.71 63C161.433 58.2624 161.3 55.8692 157.71 52L150.71 49.5V36C147.697 29.3767 144.381 26.6884 136.71 23H105.21V9.5C103.818 4.69695 101.88 2.89298 96.7102 1H65.7102C61.4085 2.26051 59.3605 3.92827 56.7102 9.5V23ZM28.2102 49.5H133.71V42L131.21 40H31.2102L28.2102 42V49.5ZM133.71 66H28.2102L32.2102 187.5L34.7102 191H44.2102V120.5C50.4593 112.922 53.9613 113.987 60.2102 120.5V191H73.2102V120.5C79.2535 114.44 82.6711 114.364 88.7102 120.5V191H101.71V120.5C107.761 114.924 111.161 114.743 117.21 120.5V191H127.71L130.71 187.5L133.71 66Z" fill="white" stroke="white"/>
                                </svg> Excluir Paciente
                            </button>
                        </a>
                    </div>
                </div>
            @endif
            
            
            <table class="table shadow mb-5">
                @if(isset($paciente))
                    <div class="p-0">
                        <a href="{{url("pacientes/$paciente->id/vacinas/create")}}">
                            <input type="button" class="btn btn-primary" value="Cadastrar nova vacina">
                        </a>
                    </div>
                @endif
                <thead>
                <tr>
                    <th scope="col">Dose</th>
                    <th scope="col">Data da vacina</th>
                    @if(isset($paciente))
                    @else
                        <th scope="col">Nome</th>
                    @endif
                    <th scope="col">Fabricante</th>
                    <th scope="col">Lote</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Vacinador</th>
                    <th scope="col">Unidade</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($vacina))
                @foreach($vacina as $vacinas)
                    @php
                        $vacina_paciente=$vacinas->find($vacinas->id)->relPacientes;
                        $lote=$vacinas->find($vacinas->id)->relLotes;
                    @endphp
                    <tr>
                        <th scope="row">{{$vacinas->dose}}</th>
                        <td>
                            {{date('d/m/Y',strtotime($vacinas->data_da_vacina))}}
                            @if(date('d/m/Y',strtotime($vacinas->data_da_vacina))===date('d/m/Y'))
                                <span class="badge bg-success">Hoje</span>
                            @endif
                        </td>
                        @if(isset($paciente))
                        @else
                            <td>{{$vacina_paciente->name}}</td>
                        @endif
                        <td>{{$lote->fabricante}}</td>
                        <td>{{$lote->lote}}</td>
                        <td>{{date('d/m/Y',strtotime($lote->validade))}}</td>
                        <td>{{$vacinas->vacinador}}</td>
                        <td>{{$vacinas->unidade_de_vacinacao}}</td>
                        <td>

                            <a href="{{url("vacinas/$vacinas->id/edit")}}">
                                <button class="btn btn-primary btnSvgPai">
                                    <svg class="btnSvg" viewBox="0 0 244 245" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M42 44.5H140C148.575 36.3474 150.013 31.6041 140 22.5H42C17.6461 32.8269 7.52796 42.1023 0.5 69.5V197.5C8.3418 226.348 17.2062 236.802 42 244H179.5C209.916 236.825 218.612 226.16 222 197.5V108C213.018 96.346 207.982 97.3158 199 108V197.5C197.659 214.242 192.895 218.915 179.5 221.5H42C31.8037 218.695 28.1658 212.53 23.5 197.5V69.5C24.8002 56.7332 29.0721 51.3724 42 44.5Z" fill="white" stroke="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M80.5 129.5L194 6C204.826 0.978686 210.874 -0.851288 221.5 3C230.962 7.18383 235.383 11.1805 241.5 21.5C243.902 31.9684 243.417 37.8794 239 48.5L125 172.5L82.5 190.5C71.2163 189.078 67.8356 185.342 66 174.5L80.5 129.5ZM114.5 126L208.5 23.5C220.369 22.1536 222.521 25.2699 221.5 35L128.5 138.5L114.5 126ZM114.5 154L100 141.5L93 163.5L114.5 154Z" fill="white" stroke="white"/>
                                    </svg> Editar
                                </button>
                            </a>

                            <a href="{{url("vacinas/$vacinas->id")}}" onclick="confirmDelVac(event)">
                                <button class="btn btn-danger btnSvgPai">
                                    <svg class="btnSvg" viewBox="0 0 161 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M56.7102 23H25.7102C17.3769 26.533 14.4555 29.4569 11.7102 36V49.5C8.6384 49.8631 6.90355 50.2348 3.71017 52C0.157965 56.2956 0.0357728 58.7045 3.71017 63L11.7102 66L16.2102 191C19.5013 200.054 22.6206 203.64 31.2102 206.5H129.21C139.291 203.199 143.082 199.936 145.71 191L150.71 66C154.518 64.8596 156.364 64.2119 157.71 63C161.433 58.2624 161.3 55.8692 157.71 52L150.71 49.5V36C147.697 29.3767 144.381 26.6884 136.71 23H105.21V9.5C103.818 4.69695 101.88 2.89298 96.7102 1H65.7102C61.4085 2.26051 59.3605 3.92827 56.7102 9.5V23ZM28.2102 49.5H133.71V42L131.21 40H31.2102L28.2102 42V49.5ZM133.71 66H28.2102L32.2102 187.5L34.7102 191H44.2102V120.5C50.4593 112.922 53.9613 113.987 60.2102 120.5V191H73.2102V120.5C79.2535 114.44 82.6711 114.364 88.7102 120.5V191H101.71V120.5C107.761 114.924 111.161 114.743 117.21 120.5V191H127.71L130.71 187.5L133.71 66Z" fill="white" stroke="white"/>
                                    </svg> Excluir
                                </button>
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
                @endif

                </tbody>
            </table>
    </div>
@endsection
