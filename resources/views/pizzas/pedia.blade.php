@extends('layouts.app')


@section('title' , 'Controle do Dia')


@section('content')

<link rel="stylesheet" href="{{ asset('css/relatoriodia.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">



    <div class="container mt-5">
        
                <div class="row">
        <div class="col-sm-10">
        
          <h1 class="float-left">Todos os pedidos do dia:</h1>

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
            <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
       @foreach($pedidodias as $pedidodia)
            <tr>
                <th id="comanda">{{ $pedidodia -> id }}</th>
                <th>{{ $pedidodia -> nome }}</th>
                <th>{{ $pedidodia -> sabor }}</th>
                <th>{{ $pedidodia -> borda }}</th>
                <th>{{ $pedidodia -> hora}}</th>
                <th class="dincar">{{ $pedidodia -> dincar}}</th>
                <th class="entrtegaretirada">{{ $pedidodia -> entrtegaretirada}}</th>
                <th  class="valor" >{{ $pedidodia -> valor }}</th>
                

                
                
                   



                <th >
                    <form action="{{ route('pedidos-destroy', ['id'=>$pedidodia -> id, 'page' => 3])}}" onclick="return confirm('Tem certeza de que deseja deletar esse pedido? do(A) cliente {{ $pedidodia -> nome }} ')" method="POST"> 
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

        <div class="container">
            <button id="btn-calcular" class="btn btn-primary float-left" >Gerar Relatorio</button>

            <form action="{{ route('excluir-todos') }}" method="post">
             @csrf
             <a href="#finalizar-dia" class="btn btn-danger float-right">Finalizar Dia</a>
             <div id="finalizar-dia" class="modalDialog">
                  <div>
                      <h2>ATEÇÃO</h2>
                      <p>Tem certeza de que deseja finalizar o dia?</p>
                      <p>Caso ainda não tenha salvo o relatório tenha em mente de que não será possível recuperá-lo.</p>
                      <div class="can-seg d-flex">
                      <a href="#close" title="Close" class="btn btn-danger ">Cancelar!</a>
                      <button type="submit" class="btn btn-primary seguir">Sim, finalizar dia</button>
                  </div>
                  </div>
    </div>
            </form>
            
        </div>


    
    <script src="{{ asset('js/g-relatorio.js') }}"></script>

    <div class="content" id="content">

    
    <h1>Relatorio Do Dia</h1>
        <small id="datare">00/00/0000</small>
        <hr>
        <h2>Quantidade total de pedidos:</h2>
        <h3 id="totalpedidos">qtdValores</h3>
        <hr>
        <h2>A quantidade de pedidos pagos em dinheiro foi de:</h2>
        <h3 id="pedidospdinheiro"> qtdDinheiro </h3>
        <h2>Totalizando o valor total em dinheiro em:</h2>
        <h3 id="valortotaldinheiro">valorDinheiro</h3>
        <hr>
        <h2>A quantidade de pedidos pagos com Cartão foi de:</h2>
        <h3 id="pedidospcartao">qtdCartao</h3>
        <h2>Totalizando o valor total pagos com o cartão de:</h2>
        <h3 id="valortotalcartao">valorCartao</h3>
        <hr>
        <h2>Sairam <small id="pedidosentregues">qtdentrega</small> entregas. e <small id="pedidosretirados">qtdretirada</small> Pedidos foram retirados no local</h2> 
        <hr>

        <center>
        <h1>Percentual de faturamento do dia</h1>

   

         <div class="d-flex">
            <div class="carto">
        <h1>Pagos Com Cartão</h1>
        <div class="box">
            <div class="box-circle">
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle id="circleprogress" cx="70" cy="70" r="70"></circle>
                </svg>
                <div class="number">
            </div>
            </div>
            
        </div>

</div>
<div class="din">

      <h1>Pagos Com Dinheiro</h1>
        <div class="box">
            <div class="box-circle">
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle id="circleprogress1" cx="70" cy="70" r="70"></circle>
                </svg>
                <div class="number1">
            </div>
            </div>
            
        </div>


</div>


    
    </div>

<br>
    <h1>Valor Total faturado do dia:</h1>
    <h1 id="somadia"></h1>
</center>
  
    
@endsection

