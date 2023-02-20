@extends('layouts.app')


@section('title' , 'Lançamento de pedidos')


@section('content')

<script src="{{ asset('js/verificadorpedidos.js') }}"></script>


    <div class="container mt-5">
        
                <div class="row">
        <div class="col-sm-10">
        
          <h1 class="float-left">Pedidos em andamento:</h1>

          <a href="{{ route('pedidos-create')}}" class="btn btn-secondary float-right">Adicionar</a>
      
        </div>

        </div>
          
           <table class="table">
         
        <thead>
            <tr>
            <th scope="col">N.</th>
            <th scope="col">Nome Do Cliente</th>
            <th scope="col">Sabor</th>
            <th scope="col">Borda</th>
            <th scope="col">Horario</th>
            <th scope="col">Din/cart</th>
            <th scope="col">Ent/Ret</th>
            <th scope="col">Valor</th>
            <th scope="col">Edit/Del</th>
            </tr>
        </thead>
        <tbody>
       @foreach($pedidos as $pedido)
            <tr>
                <th id="comanda">{{ $pedido -> id }}</th>
                <th>{{ $pedido -> nome }}</th>
                <th>{{ $pedido -> sabor }}</th>
                <th>{{ $pedido -> borda }}</th>
                <th>{{ $pedido -> hora}}</th>
                <th>{{ $pedido -> dincar}}</th>
                <th>{{ $pedido -> entrtegaretirada}}</th>
                <th>{{ $pedido -> valor }}</th>



                <th class="d-flex">
                    <a href="{{ route('pedidos-edit', ['id'=>$pedido -> id , 'page' => 1] ) }}" class="btn btn-primary "> 
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                       <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                       <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg>
                    </a>




                    <form action="{{ route('pedidos-destroy',  ['id'=>$pedido -> id , 'page' => 1])}}" onclick="return confirm('Tem certeza de que deseja deletar esse pedido? do(A) cliente {{ $pedido -> nome }} ')" method="POST"> 
                        @csrf
                        @method('delete')

                    <button type="submit" class="btn btn-danger ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </button>


                    </form>

                </th> 
          
        </tr>



@endforeach
        </tbody>
        </table>
</div>

@endsection