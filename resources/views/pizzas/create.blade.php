@extends('layouts.app')


@section('title' , 'Lançar pedido')


@section('content')

       <div class="container mt-5">
        <h1>Lançar um pedido</h1>
        <hr>
        <form action="{{ route('pedidos-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome Do Cliente" >
                </div>

                <br>

                <div class="form-group">
                    <label for="sabor">Sabor Da Pizza:</label>
                    <input type="text" name="sabor" class="form-control" placeholder="ex:Mussarela/Calabresa" >
                </div>

                <br>
                
                <div class="form-group">
                    <label for="borda">Borda:</label>
                    <input type="text" name="borda" class="form-control" placeholder="ex:Catupiry" >
                </div>

                <br>
                <div class="form-group">
                    <label for="hora">Horario:</label>
                    <input type="text" name="hora" id="time" class="form-control" placeholder="prenchimento automatico" >
                </div>

                <br>

                <div class="form-group">
                    <label for="dincar">Dinheiro ou Cartão:</label>
                    <input type="text" name="dincar" class="form-control" placeholder="Dinheiro ou Cartão" >
                </div>

                <br>

                <div class="form-group">
                    <label for="entrtegaretirada">Entrega ou Retirada:</label>
                    <input type="text" name="entrtegaretirada" id="time" class="form-control" placeholder="Entrega ou Retirada" >
                </div>

                <br>
                <div class="form-group">
                    <label for="valor">Valor Total:</label>
                    <input type="text" name="valor" class="form-control" placeholder="ex:R$:00.00 obs:usar ponto ao inves de virgula" >
                </div>

                <br>


            </div>
             <div class="container">

                    <input type="submit" onclick="retempo()" class="btn btn-primary float-left" name="submit">
                
                    <a href="{{ route('pedidos-index')}}" class="btn btn-secondary float-right">Pedidos</a>
                

</div>
        </form>
       </div>

                


@endsection