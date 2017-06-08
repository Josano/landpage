<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Visitante;

class VisitanteController extends Controller
{
    private static function getEstados(){
        $estados = array("AC"=>"Acre", "AL"=>"Alagoas", "AM"=>"Amazonas", "AP"=>"Amapá","BA"=>"Bahia","CE"=>"Ceará",
            "DF"=>"Distrito Federal","ES"=>"Espírito Santo","GO"=>"Goiás","MA"=>"Maranhão","MT"=>"Mato Grosso",
            "MS"=>"Mato Grosso do Sul","MG"=>"Minas Gerais","PA"=>"Pará","PB"=>"Paraíba","PR"=>"Paraná",
            "PE"=>"Pernambuco","PI"=>"Piauí","RJ"=>"Rio de Janeiro","RN"=>"Rio Grande do Norte","RO"=>"Rondônia",
            "RS"=>"Rio Grande do Sul","RR"=>"Roraima","SC"=>"Santa Catarina","SE"=>"Sergipe","SP"=>"São Paulo",
            "TO"=>"Tocantins"
        );
        return $estados;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitantes = Visitante::all();
        return view('visitante.index', ['visitantes' => $visitantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = self::getEstados();
        return view('visitante.create', ['estados' => $estados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome'=> 'required',
            'sexo'=> 'required',
            'email'=> 'required',
            'telefone_celular'=> 'required',
            'data_nascimento'=> 'required',
            'logradouro'=> 'required',   
            'numero'=> 'required',       
            'complemento'=> 'required',
            'bairro'=> 'required',
            'cidade'=> 'required',
            'uf'=> 'required',
            'cep'=> 'required',
        ]);

        $visitante = new visitante;
        $visitante->nome = $request->nome;
        $visitante->sexo = $request->sexo;
        $visitante->email = $request->email;
        $visitante->telefone_celular = $request->telefone_celular;
        $visitante->data_nascimento = date('Y-m-d', strtotime($request->data_nascimento));
        $visitante->logradouro = $request->logradouro;
        $visitante->numero = $request->numero;
        $visitante->complemento = $request->complemento;
        $visitante->bairro = $request->bairro;
        $visitante->cidade = $request->cidade;
        $visitante->uf = $request->uf;
        $visitante->cep = $request->cep; 
        $visitante->save();

        return redirect('/')->with('message', 'Dados enviados com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
