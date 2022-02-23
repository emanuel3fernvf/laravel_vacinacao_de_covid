@extends('templates.template')

@section('content')

    <div class="col-8 m-auto mt-3 shadow shadow-lg p-3">
        <h4>@if(isset($lote))Editar lote @else Cadastro de novo lote @endif</h4>
        @if(isset($lote))
            <form class="row g-3 mt-1 mb-4 border align-items-center p-3" name="formLoteEdit" id="formLoteEdit" method="post" action="{{url("lotes/$lote->id")}}">
                @method('PUT')
                @else
                    <form class="row g-3 mt-1 mb-4 border align-items-center p-3" name="formLote" id="formLote" method="post" action="{{url("lotes")}}">
                @endif
            @csrf
            <div class="col-md-6">
                <label for="lote" class="form-label">Lote:</label>
                <input class="form-control m-auto" type="text" name="lote" id="lote" placeholder="Digite o lote:" value="{{$lote->lote ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="fabricante" class="form-label">Fabricante:</label>
                <input class="form-control m-auto" type="text" name="fabricante" id="fabricante" placeholder="Digite o fabricante:" value="{{$lote->fabricante ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="validade" class="form-label">Validade:</label>
                <input class="form-control m-auto" type="date" name="validade" id="validade" placeholder="Digite a validade:" value="{{isset($lote->validade) ? date('Y-m-d',strtotime($lote->validade)) : ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="nfe" class="form-label">N.F.E.:</label>
                <input class="form-control m-auto" type="text" name="nfe" id="nfe" placeholder="Digite a nfe:" value="{{$lote->nfe ?? ''}}" required>
            </div>
            <div class="col-md-6">
                <label for="data_recebimento" class="form-label">Data de recebimento:</label>
                <input class="form-control m-auto" type="datetime-local" name="data_recebimento" id="data_recebimento" placeholder="Digite a data do recebimento:" value="{{isset($lote->data_recebimento) ? str_replace('UTC','T',date('Y-m-dTh:m',strtotime($lote->data_recebimento))) : ''}}" required>
            </div>
            <div class="col-md-12">
                <input class="btn btn-primary m-auto" type="submit" value="@if(isset($lote)) Editar @else Cadastrar @endif">
            </div>
        </form>
    </div>
@endsection
