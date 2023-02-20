@extends('layouts.app')


@section('title' , 'Lançamento de pedidos')


@section('content')


<script src="{{ asset('js/verificadorpedidos.js') }}"></script>
<div class="mt-2 row d-flex flex-wrap justify-content-center " >
 @foreach($pedidos as $pedido)
         
<div class="my-div p-3 m-2 " >
    <th><p id="comanda">N°: {{ $pedido -> id }} </p></th>
    <th> <h3>Nome: </h3>  {{ $pedido -> nome }}</th>
    <hr>
    <th> <h3>Sabor: </h3> {{ $pedido -> sabor }} </th>
    <hr>
    <th> <h3>Borda: </h3> {{ $pedido -> borda }} </th>
    <hr>
    <th> <h3>Horario: </h3> {{ $pedido -> hora}} </th>
    <hr>
    <th>
    <form action="{{ route('pedidos-destroy', ['id'=>$pedido -> id, 'page' => 2]) }}"  onclick="return confirm('Tem certeza de que deseja finalizar esse pedido? do(A) cliente {{ $pedido -> nome }}')" method="POST"> 
                        @csrf
                        @method('delete')
                        <input type="hidden" name="from" value="pedidos-pizzaiolos">
                    <button type="submit">
                        Finalizar
                    </button>


                    </form>
</th>

 </div>
@endforeach
</div>

  


@endsection