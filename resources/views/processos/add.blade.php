@extends('layouts.app')

@section('content')

<h2 class="page-header">Processo</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/processos'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nro_processo" class="col-sm-3 control-label">Nro Processo</label>
                <div class="col-sm-6">
                    <input type="text" name="nro_processo" id="nro_processo" class="form-control" value="{{$model['nro_processo'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="data_distribuicao" class="col-sm-3 control-label">Data Distribuição</label>
                <div class="col-sm-3">
                    <input type="date" name="data_distribuicao" id="data_distribuicao" class="form-control" value="{{$model['data_distribuicao'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="reu_principal" class="col-sm-3 control-label">Reu Principal</label>
                <div class="col-sm-6">
                    <input type="text" name="reu_principal" id="reu_principal" class="form-control" value="{{$model['reu_principal'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="valor_causa" class="col-sm-3 control-label">Valor Causa</label>
                <div class="col-sm-2">
                    <input type="number" name="valor_causa" id="valor_causa" class="form-control" value="{{$model['valor_causa'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="vara" class="col-sm-3 control-label">Vara</label>
                <div class="col-sm-6">
                    <input type="text" name="vara" id="vara" class="form-control" value="{{$model['vara'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="cidade" class="col-sm-3 control-label">Cidade</label>
                <div class="col-sm-6">
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{$model['cidade'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="uf" class="col-sm-3 control-label">Uf</label>
                <div class="col-sm-2">
                    <select name="uf" id="uf" class="form-control">
                      	<option value="">Selecione</option>
                      	<option value="AC">AC</option>
                      	<option value="AL">AL</option>
                      	<option value="AM">AM</option>
                      	<option value="AP">AP</option>
                      	<option value="BA">BA</option>
                      	<option value="CE">CE</option>
                      	<option value="DF">DF</option>
                      	<option value="ES">ES</option>
                      	<option value="GO">GO</option>
                      	<option value="MA">MA</option>
                      	<option value="MG">MG</option>
                      	<option value="MS">MS</option>
                      	<option value="MT">MT</option>
                      	<option value="PA">PA</option>
                      	<option value="PB">PB</option>
                      	<option value="PE">PE</option>
                      	<option value="PI">PI</option>
                      	<option value="PR">PR</option>
                      	<option value="RJ">RJ</option>
                      	<option value="RN">RN</option>
                      	<option value="RS">RS</option>
                      	<option value="RO">RO</option>
                      	<option value="RR">RR</option>
                      	<option value="SC">SC</option>
                      	<option value="SE">SE</option>
                      	<option value="SP">SP</option>
                      	<option value="TO">TO</option>
                     </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/processos') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
