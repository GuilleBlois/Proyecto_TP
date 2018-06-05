@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Servicios Management</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
							}
						</div>
					@endif
					<h1>Estás en la pantalla de Servicios</h1>
					<form method="POST" action="{{ route('serviciodoedit') }}">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{$s[0]['id']}}">
						<input value="{{$s[0]['nombre']}}" type="text" placeholder="Introduzca el nombre del servicio" size="50" name="nombre">
						<br><br>
						<input value="{{$s[0]['tipo']}}" type="text" placeholder="Introduzca el tipo de servicio" size="50" name="tipo">
						<br><br>
						<input value="{{$s[0]['numero_personas']}}" type="number" placeholder="Nº de personas" name="numero_personas">
						<br><br>
						<input type="submit" value="Enviar">
					</form>
				</div>
				</div>
	</div>
</div>
@endsection