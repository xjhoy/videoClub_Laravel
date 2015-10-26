@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	{!!Form::open(array('route'=>'usuario.store'))!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


@stop
