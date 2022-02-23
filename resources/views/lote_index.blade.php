@extends('templates.template')

@section('content')
    <div class="col-10 m-auto">
        <form class="row g-3 m-auto" name="formSearch" id="formSearch" method="get" action="">

            <table class="table shadow mb-5">
                <div class="p-0">
                <a href="{{url("lotes/create")}}">
                    <input type="button" class="btn btn-primary" value="Cadastrar novo lote">
                </a>
                </div>
                <thead>
                <tr>
                    <th scope="col">Lote</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Validade</th>
                    <th scope="col">nfe</th>
                    <th scope="col">Data de Recebimento</th>
                    <th scope="col">Edt/Exc</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lote as $lotes)
                    <tr>
                        <td>{{$lotes->lote}}</td>
                        <td>{{$lotes->fabricante}}</td>
                        <td>{{date('d/m/Y',strtotime($lotes->validade))}}</td>
                        <td>{{$lotes->nfe}}</td>
                        <td>{{date('d/m/Y',strtotime($lotes->data_recebimento))}}</td>
                        <td>
                            <a href="{{url("lotes/$lotes->id/edit")}}">
                                <svg width="25" height="25" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.5" y="1.5" width="219" height="219" rx="40.5" stroke="black" stroke-width="15"/>
                                    <path d="M110.5 12H140L147.5 16.0379L152 27.7477L124 154.133L104.5 177.553L87 195.319L77 173.111L69 154.133L96.5 27.7477L110.5 12Z" fill="black"/>
                                    <rect x="69" y="200.792" width="64" height="8.20833" fill="black"/>
                                </svg>
                            </a>
                            <svg width="25" height="25" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.5" y="1.5" width="219" height="219" rx="40.5" stroke="black" stroke-width="15"/>
                                <path d="M43.5 77.991L95 84L144.5 84L183 77.991L179 197L148 204H86L53 197L43.5 77.991Z" fill="black"/>
                                <path d="M46.1742 55.9216L92.3113 39.051L125.955 29.4037L164.409 22.0182L173.071 30.4577L140.257 46.6288L91.7137 60.5485L41.8589 68.0822L46.1742 55.9216Z" fill="black"/>
                            </svg>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </form>
    </div>
@endsection
