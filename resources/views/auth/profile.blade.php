@extends('layouts.app')

@section('content')

<h2 class="page-header">Perfil</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="{{ url('/profile/'.$model->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
			
			<input type="hidden" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
			
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{$model['name'] or ''}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="{{$model['email'] or ''}}" readonly="readonly">
                </div>
            </div>
			<div class="form-group">
                <label for="password" class="col-sm-3 control-label">Senha</label>
                <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="{{ url('/home') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
