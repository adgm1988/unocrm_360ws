@extends('layout')
@section('content')



<h3 class='text-center'>Bitácoras</h3>
<!-- Trigger the modal with a button -->

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Prospecto</th>
				<th>Fecha</th>
				<th>Dias</th>
				<th>Etapa</th>
				<th>Etapa anterior</th>
				<th>Usuario</th>
			</tr>
		</thead>
		@foreach($bitacoras as $bitacora)
		<tr>		
			<td>{{ $bitacora->prospecto->empresa }}</td>		
			<td nowrap>{{ $bitacora->fecha }}</td>
			<td nowrap>{{ $bitacora->dias }}</td>
			<td>{{ $bitacora->nombre_etapa }}</td>
			<td>{{ $bitacora->nombre_etapa_anterior }}</td>
			<td>{{ $bitacora->nota }}</td>
			<td>{{ $bitacora->user->name }}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection