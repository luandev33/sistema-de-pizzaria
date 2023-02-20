<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedido;

use App\Models\Pedidodia;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;




class PizzaController extends Controller
{

    public function index(){
        $pedidos = Pedido::all();

       return view('pizzas.index' , ['pedidos' =>$pedidos]);
    }



    public function pizzaiolos(){

        $pedidos = Pedido::all();

       return view('pizzas.pizzaiolos' , ['pedidos' =>$pedidos]);
    }

    public function relatorio(){

        $pedidodias = Pedidodia::all();

       return view('pizzas.pedia' , ['pedidodias' =>$pedidodias]);
    }





    public function create(){
        return view('pizzas.create');
    }





    public function store(Request $request){


        Pedido::create($request->all());

        Pedidodia::create($request->all());

  return redirect()->route('pedidos-create');

    }






    public function edit($id) {

        $pedidos =  Pedido::where('id', $id)->first();

        if (!empty($pedidos)) {

            return view('pizzas.edit' , ['pedidos' =>$pedidos]);

        } else {

            return redirect()->route('pedidos-create');

        }
      }






        public function update(Request $request, $id){

           $data = [

                'nome' => $request->nome,
                'sabor' => $request->sabor,
                'borda' => $request->borda,
                'hora' => $request->hora,
                'valor' => $request->valor,


           ];

           Pedido::where('id', $id)->update($data);
           Pedidodia::where('id', $id)->update($data);

           return redirect()->route('pedidos-index');

         }






         public function destroy($id, $page){
           

              if ($page == 1) {
                    
                Pedido::where('id', $id)->delete();
                 return redirect()->route('pedidos-index');
                


             }  elseif ($page == 2){

                  Pedido::where('id', $id)->delete();
                 return redirect()->route('pedidos-pizzaiolos');
                    
                

             } elseif ($page == 3) {
                    Pedidodia::where('id', $id)->delete();
                 return redirect()->route('pedidos-relatorio');
                }

          }

          public function deleteAll()
          {
              DB::table('pedidodias')->truncate();
              DB::table('pedidos')->truncate();
              return redirect()->route('pedidos-relatorio');
          }

        
}
