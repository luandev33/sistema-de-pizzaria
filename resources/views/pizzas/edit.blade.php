@extends('layouts.app')


@section('title' , 'Editar Pedido')


@section('content')

       <div class="container mt-5">
        <h1>Editar Pedido</h1>
        <hr>
        <form action="{{ route('pedidos-update', ['id'=>$pedidos -> id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{ $pedidos->nome }}" placeholder="Nome Do Cliente" >
                </div>

                <br>

                <div class="form-group">
                    <label for="sabor">Sabor Da Pizaa:</label>
                    <input type="text" name="sabor" class="form-control" value="{{ $pedidos->sabor }}" placeholder="ex:Mussarela/Calabresa" >
                </div>

                <br>
                
                <div class="form-group">
                    <label for="borda">Borda:</label>
                    <input type="text" name="borda" class="form-control" value="{{ $pedidos->borda }}"  placeholder="ex:Catupiry" >
                </div>

                <br>

                <div class="form-group">
                    <label for="hora">Horario:</label>
                    <input type="text" name="hora" class="form-control" value="{{ $pedidos->hora }}"  placeholder="hora" >
                </div>

                <br>

                <div class="form-group">
                    <label for="dincar">Dinheiro ou Cartão:</label>
                    <input type="text" name="dincar" class="form-control" value=" {{ $pedidos->dincar }}" placeholder="Dinheiro ou Cartão" >
                </div>

                <br>

                <div class="form-group">
                    <label for="entrtegaretirada">Entrega ou Retirada:</label>
                    <input type="text" name="entrtegaretirada" id="time" class="form-control" value=" {{ $pedidos->entrtegaretirada }}" placeholder="Entrega ou Retirada" >
                </div>

                <br>
                
                <div class="form-group">
                    <label for="valor">Valor Total:</label>
                    <input type="text" name="valor" class="form-control" value="{{ $pedidos->valor }}"  placeholder="ex:R$:00.00 obs:usar ponto ao inves de virgula" >
                </div>

                <br>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
                </div>

            </div>
        </form>
       </div>

@endsection