@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="text-center">
			<h2>Bem-Vindo, {{ Auth::user()->name }}!</h2>
			<p>Sistema de Processos Judiciais</p>
		</div>
	</div>
</div>

@endsection
