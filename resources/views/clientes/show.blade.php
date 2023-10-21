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
                <label for="email" class="col-sm-3 control-label">Telefone</label>
                <div class="col-sm-6">
                    <input type="text" name="telefone" id="telefone" class="form-control" value="{{$model['telefone'] or ''}}" readonly="readonly">
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
                    <a class="btn btn-default" href="{{ url('/clientes') }}"><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
