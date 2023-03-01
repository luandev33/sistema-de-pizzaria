@extends('layouts.app')


@section('title' , 'Histórico de todos os pedidos')


@section('content')

@foreach($historicos as $historico)

<hr>
<h1>{{ $historico ->  created_at->format('d/m/Y')}}</h1>
<h1>{{ $historico -> nome }}</h1>
<h1>{{ $historico -> id }}</h1>

@endforeach

@endsection
