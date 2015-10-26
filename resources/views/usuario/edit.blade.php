@extends('layouts.admin')

@section('content')
	
	@include('alerts.request')
	<div class="form-group">
		{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
			@include('usuario.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	</div>		

	<div class="form-group">
		{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	</div>


@stop
