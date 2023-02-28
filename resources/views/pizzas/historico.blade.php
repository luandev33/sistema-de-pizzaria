@extends('layouts.app')


@section('title' , 'Histórico de todos os pedidos')


@section('content')

@foreach($historicos as $historico)

<h1>{{ $historico -> nome }}</h1>

@endforeach

@endsection
