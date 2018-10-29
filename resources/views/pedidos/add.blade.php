@extends('layouts.app')

@section('content')

<h2 class="page-header">Pedido</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/pedidos'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="id_tipo_pedido" class="col-sm-3 control-label">Tipo Pedido</label>
                <div class="col-sm-2">
                    <select name="id_tipo_pedido" id="id_tipo_pedido" class="form-control" required="required">
                        @if ($tipopedidos->count())
                            @foreach($tipopedidos as $tipopedido)
                                <option value="{{ $tipopedido->id }}" {{ $selecionaTipopedido == $tipopedido->id ? "selected=selected" : "" }}>{{ $tipopedido->nome }}</option>
                            @endForeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="valor_risco_provavel" class="col-sm-3 control-label">Valor Risco Provavel</label>
                <div class="col-sm-2">
                    <input type="text" name="valor_risco_provavel" id="valor_risco_provavel" class="form-control" value="{{$model['valor_risco_provavel'] or ''}}" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-6">
                    <input type="text" name="status" id="status" class="form-control" value="{{$model['status'] or ''}}" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/pedidos') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
