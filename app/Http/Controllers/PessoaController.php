<?php

namespace App\Http\Controllers;

use App\pessoa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PessoaController extends Controller
{
   

 public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa= new Pessoa();

    //


     return pessoa::all();   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pessoa= new Pessoa();

            $pessoa::create([
            'nome' => "acbd",
            'rg' =>"email",
            'cpf' => "password",
            'endereco_id_endereco' => 1,
            'data_nascimento' => 120520,
            'sexo_id_sexo' => "1",
            'cor_id_cor' => "1",
                           ]);

 //return Redirect::to('/cadastrar');



               //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa= new Pessoa();
        //dd($request);

            $pessoa::create([
                'nome' => $request->nome,
                'rg' => $request->rg,
                'cpf' => $request->cpf,
                'endereco_id_endereco' => $request->endereco_id_endereco,
                'data_nascimento' => $request->data_nascimento,
                'sexo_id_sexo' => $request->sexo_id_sexo,
                'cor_id_cor' => $request->cor_id_cor,
                               ]);

return      redirect('/cadastrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(pessoa $pessoa)
    {
        //
    }
public function t1(Request $request)
    {
        //testa medicamentos suspeitos no post
// se traz as informações

       return dd($request); 
    
       }

public function vt1(Request $request)
    {
        //testa medicamentos suspeitos no post
// se traz as informações

       return view('t1'); 
    
       }


}
