@extends('layouts.app')

@section('content')

<h2 class="page-header">Cliente</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/clientes'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$model['nome'] or ''}}" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="{{$model['email'] or ''}}" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/clientes') }}"><i class="fa fa-arrow-left"></i> Voltar</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Salvar
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
