@extends('layouts.app')

@section('content')

<h2 class="page-header">Cliente</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/clientes') }}" method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$model['nome'] or ''}}" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="{{$model['email'] or ''}}" readonly="readonly">
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
                    <a class="btn btn-default" href="{{ url('/clientes') }}"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
