<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Pessoa;
use App\Medicamento;
use App\Notificacao;
use App\Avaliacao;


class NotificacaoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('notificacao.index');
    }


//apresentando formulario de cadastro de notificacao
    public function cadastrar(Request $request)

    {

//        $paciente = $this->montaPaciente($request);
//        $medicamentos = new Medicamento();
//        $listaMedicamentos = $medicamentos->all();
        $listaMedicamentos = Medicamento::select('atc','id','nome')->get();
        $listaNotificacao = new Notificacao();
        $listaNotificacao = Notificacao::all();
        //var_dump($listaMedicamentos[0]);die;

        return view('notifica.index', compact('listaMedicamentos','listaNotificacao'));
    }
public function create(Request $request)

    {

//        $paciente = $this->montaPaciente($request);
//        $medicamentos = new Medicamento();
//        $listaMedicamentos = $medicamentos->all();
        $listaMedicamentos = Medicamento::select('atc','id','nome')->get();
        $listaNotificacao = new Notificacao();
        $listaNotificacao = Notificacao::all();
        //var_dump($listaMedicamentos[0]);die;

        return view('notifica.create', compact('listaMedicamentos','listaNotificacao'));
    }

//fim apresentação




    public function inserirLista()
    {
        return view('notificacao.formulario');
    }



    public function postCadastra(Request $request)

    {
        // $dados_post = new input::all();

        dd($request);
        $medicamentos = new Medicamento();
        $listaMedicamentos = $medicamentos::all();
        $listaMedicamentos = Medicamento::select('act', 'id')->get();
        //var_dump($listaMedicamentos[0]);die;

        return view('lista_notificacao', compact('listaMedicamentos'));
    }

    public function validar()
    {
        //              return view('notificacao.formulario');

        $notificacao = new Notificacao();
        $listaNotificacao = $notificacao::all();
        $listaNotificacao = Notificacao::select('data_notificacao_ficha', 'id', 'status_notificacao_id')->get();

        return view('validar', compact('listaNotificacao'));
        //return $pessoa::all();
    }


    public function inserir()
    {
        //              return view('notificacao.formulario');
        $pessoa = new pessoa();

        return view('inserir_notificacao');
        //return $pessoa::all();
    }


    private function montaPaciente($request)
    {
        $paciente = new Paciente($request::all());
        $paciente->save();
        return $paciente->save();
    }

    private function montarNotificacao($request, $paciente)
    {
        $notificacao = new Notificacao($request::all());
        $notificacao->idPaciente = $paciente->id;
        $notificacao->save();

    }


    public function getMedicamentos(Request $request)
    {
        //return view('notificacao.formulario');
        
        $medicamentostodos = $medicamento->all();
           // $quary= $request->get('term','');
          //$paciente = $medicamento = new Medicamento();
            //    $data=$paciente->where('nome','LIKE','%'.$quary.'%')->get();



        //$data = Medicamento::select('atc', 'nome')->get();
        return json_encode($medicamentostodos);
    }

    public function getNotificacao()
    {
        //return view('notificacao.formulario');
        $notificacao = new Notificacao();
        $data = $notificacao->all();
        return json_encode($data);
    }

    public function getAvaliacao()
    {
        //return view('notificacao.formulario');
        $avaliacao = new Avaliacao();
        $data = $avaliacao->all();
        return json_encode($data);
    }


    public function storeNotificacao(Request $request)
    {
        dd($request);
        $paciente = new Paciente();
        $notificacao = new Notificacao();
        $ram = new Ram();
        $medsus = new Medsus();
        
        $values = array_except($request->all(), ['_token']);
        //dd($values);
        //$paciente->id=1;

        // monta paciente 

        $paciente->prontuario=$request->prontuario;
        $paciente->peso=$request->peso;
        $paciente->nome=$request->nome;
        $paciente->dataNas=$request->dataNas;
        $paciente->idade=$request->idade;
        $paciente->sexo_id=$request->sexo;
        $paciente->cor_id=$request->raca;
        
       // $paciente->save();
       
        //fim paciente


        dd($paciente);
      
//        $notificacao::create([
//            'paciente_prontuario' => $request->paciente_prontuario,
//            'avaliacao_id' => $request->avaliacao_id,
//            'ram_tipo_ram_id' => $request->ram_tipo_ram_id,
//            'status_notificacao_id' => $request->status_notificacao_id,
//            'data_final_validacao' => $request->data_final_validacao,
//            'data_inicio_validacao' => $request->data_inicio_validacao,
//            'data_notificacao_ficha' => $request->data_notificacao_ficha,
//        ]);

        return redirect('/cadastrar');
    }


}












//fim da controller


;