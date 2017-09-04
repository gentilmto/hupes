<?php

namespace App\Http\Controllers;


use App\Paciente;
use App\Cor;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;


class PacienteController extends Controller
{
    //


// public function index()
//     {
      
//       $paciente= new Paciente();
//       //$paciente=$paciente->find(1);

//       $data=$paciente->get();
      

//      // dd($data);
//          //return view('notificacao.lista_cor', compact('data'));
//    return view('select-cor',compact('data'));

//    }




public function getCor(Request $request)
    {
      $quary= $request->get('term','');
      $paciente = new Paciente();
			$data=$paciente->where('nome','LIKE','%'.$quary.'%')->get();
	   // $data=$paciente->get();
      //dd($data);
	       return json_encode($data);
   }



//$paciente=$paciente->where('nome','LIKE','%a%');

/*
foreach ($paciente->cor()->get() as $cidade)
{
    echo $cidade->descricao;

}
*/
// $paciente->where('nome',"marcio")->get();


  //    $data = $paciente->all();

      
      //dd($data);


//paciente
public function index() {
    $products = Paciente::all();//['omeprazol','amonia'];
    return view("paciente.index", compact('products'));
}




public function busca($product_id){
    $product = Paciente::where('id',$product_id)->get();
    return response()->json($product[0]);
}


public function update(Request $request,$product_id){
    $product = Paciente::where('id',$product_id)->update($request->all());
    //$product->create($request->all());

   //$product->save();
    return response()->json($product[0]);
}

public function inserir(Request $request){
    $product = new Paciente($request->all());
    //$product->create($request->all());

   $product->save();
   //Session::flash('flash_message', 'Task successfully added!');
   return response()->json($product[0]);
}






public function delete($product_id){
    


    $product = Paciente::where('id',$product_id)->delete();
    //$product = App\Paciente::destroy($product_id);
    //$product::save();
    return response()->json($product[0]);
}
 






}
