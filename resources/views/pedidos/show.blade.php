@extends('layouts.app')

@section('content')

<h2 class="page-header">Pedido</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/pedidos') }}" method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="id_tipo_pedido" class="col-sm-3 control-label">Tipo Pedido</label>
                <div class="col-sm-6">
                    <input type="text" name="id_tipo_pedido" id="id_tipo_pedido" class="form-control" value="{{$model->tipopedido->nome or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="valor_risco_provavel" class="col-sm-3 control-label">Valor Risco Provavel</label>
                <div class="col-sm-6">
                    <input type="text" name="valor_risco_provavel" id="valor_risco_provavel" class="form-control" value="{{$model['valor_risco_provavel'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-6">
                    <input type="text" name="status" id="status" class="form-control" value="{{$model['status'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="created_at" class="col-sm-3 control-label">Data Criação</label>
                <div class="col-sm-6">
                    <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="updated_at" class="col-sm-3 control-label">Data Edição</label>
                <div class="col-sm-6">
                    <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/pedidos') }}"><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
