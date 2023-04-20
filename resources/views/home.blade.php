@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="text-center">
			<h2>Bem-Vindo, {{ Auth::user()->name }}!</h2>
			<p>Sistema de Processos Jurídicos</p>
		</div>
	</div>
</div>

@endsection
