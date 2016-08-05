@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<div class="container">
	<div class="row">

		<div class="col-md-8 col-md-offset-1">
			@include('flash::message')
			<div class="panel panel-default">

				<div class="panel-heading">Bienvenido</div>

				<div class="panel-body">
					Inicio de Sesion Exitoso
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
