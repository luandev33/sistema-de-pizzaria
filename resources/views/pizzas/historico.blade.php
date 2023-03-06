@extends('layouts.app')


@section('title' , 'Histórico de todos os pedidos')


@section('content')

<link rel="stylesheet" href="{{ asset('css/historico.css') }}">


<nav class="navbar navbar-dark bg-dark justify-content-between">
  <h3> Histórico De Pedidos</h3>
  <form method="GET" action="{{ route('pedidos-historico') }}" class="form-inline">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar Pedido" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>


@if($historicos->isEmpty())
 
  <p class="n-search">Nenhum registro encontrado para a pesquisa realizada. </p>

@endif
@if ($search)

  <center> <h1>Buscando por: {{ $search }}</h1> <a href="{{ route('pedidos-historico') }}">Todos os registros</a> </center> 

@endif
   
@foreach($historicos as $historico)



<div class="results">
<a href="#" class="text">
  <center> <h1>{{ $historico ->  created_at->format('d/m/Y')}}</h1></center>
  <div class="d-flex">
  <div class="informations1">
     <div class="d-flex"> <h1>Nome:</h1>  <h1 class="conteudo">{{ $historico -> nome }}</h1></div>
     <div class="d-flex"> <h1>ENT/RET:</h1>  <h1 class="conteudo">{{ $historico -> entrtegaretirada }}</h1></div>
     <div class="d-flex">  <h1>Horário:</h1>  <h1 class="conteudo">{{ $historico -> hora }}</h1></div>
     <div class="d-flex"> <h1>ID:</h1>  <h1 class="conteudo">{{ $historico -> id }}</h1></div>
      </div>

      <div class="informations2">
     <div class="d-flex"> <h1>DIN/CART:</h1>  <h1 class="conteudo">{{ $historico -> dincar }}</h1></div>
     <div class="d-flex">  <h1>Valor:</h1>  <h1 class="conteudo">{{ $historico -> valor }}</h1></div>
      </div>
    </div>
</a>
</div>

@endforeach

@endsection
