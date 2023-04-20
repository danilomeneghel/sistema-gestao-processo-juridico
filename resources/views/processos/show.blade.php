@extends('layouts.app')

@section('content')

<h2 class="page-header">Processo</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/processos') }}" method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="nro_processo" class="col-sm-3 control-label">Nro Processo</label>
                <div class="col-sm-6">
                    <input type="text" name="nro_processo" id="nro_processo" class="form-control" value="{{$model['nro_processo'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="pedido" class="col-sm-3 control-label">Pedido</label>
                <div class="col-sm-6">
					         @foreach($model->pedido as $pedido)
                    <div style="padding-bottom:4px">
                      <input type="text" name="pedido" class="form-control" value="{{$pedido->tipopedido['nome'].' (R$ '.number_format($pedido['valor_risco_provavel'], 2, ',', ' ').')'}}" readonly="readonly">
                    </div>
									 @endforeach
                </div>
            </div>

            <div class="form-group">
                <label for="nro_processo" class="col-sm-3 control-label">Cliente</label>
                <div class="col-sm-6">
                    <input type="text" name="id_cliente" id="id_cliente" class="form-control" value="{{$model->cliente->nome or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_distribuicao" class="col-sm-3 control-label">Data Distribuição</label>
                <div class="col-sm-6">
                    <input type="text" name="data_distribuicao" id="data_distribuicao" class="form-control" value="{{$model['data_distribuicao'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="valor_causa" class="col-sm-3 control-label">Valor Causa</label>
                <div class="col-sm-6">
                    <input type="text" name="valor_causa" id="valor_causa" class="form-control" value="{{$model['valor_causa'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="vara" class="col-sm-3 control-label">Vara</label>
                <div class="col-sm-6">
                    <input type="text" name="vara" id="vara" class="form-control" value="{{$model['vara'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="cidade" class="col-sm-3 control-label">Cidade</label>
                <div class="col-sm-6">
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{$model['cidade'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="uf" class="col-sm-3 control-label">Uf</label>
                <div class="col-sm-6">
                    <input type="text" name="uf" id="uf" class="form-control" value="{{$model['uf'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_criacao" class="col-sm-3 control-label">Data Criação</label>
                <div class="col-sm-6">
                    <input type="text" name="data_criacao" id="data_criacao" class="form-control" value="{{$model['data_criacao'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_edicao" class="col-sm-3 control-label">Data Edição</label>
                <div class="col-sm-6">
                    <input type="text" name="data_edicao" id="data_edicao" class="form-control" value="{{$model['data_edicao'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/processos') }}"><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
