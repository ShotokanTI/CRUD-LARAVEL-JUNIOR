<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\contrato;
use Illuminate\Http\Request;

class contratoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cnpj' => 'required|max:18',
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'email' => 'required',
            'logomarca' => 'required',
            'in_User' => 'required',
            'status' => 'required',
        ]);
        $fileName = time() . '_' . $request->file('logomarca')->getClientOriginalName();
        $request->file('logomarca')->move('public/logomarca', $fileName);
        $contrato = new contrato([
            'cnpj' => $request->get('cnpj'),
            'razao_social' =>   $request->get('razao_social'),
            'nome_fantasia' =>  $request->get('nome_fantasia'),
            'email' => $request->get('email'),
            'in_User' =>    $request->get('in_User'),
            'logomarca' =>  $fileName,
            'status' => $request->get('status'),
        ]);

        $contrato->save();

        return redirect('home')->with('status', 'Inclusão de contrato feito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $escolhido)
    {

        function formatCnpjCpf($id)
        {
            $cnpj_cpf = preg_replace("/\D/", '', $id);

            if (strlen($cnpj_cpf) === 11) {
                return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
            }

            return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
        }
        // $cnpj = $id->get('cnpj');
        // $razaosocial = $id->get('razaosocial');
        // $nomefantasia = $id->get('nomefantasia');


        $escolhido = $escolhido->get('escolhido');
        if ($escolhido == 'cnpj') {
            $id = formatCnpjCpf($id);
        }
        // $busca = array('cnpj' => $cnpj, 'razao_social' => $razaosocial, 'nome_fantasia' => $nomefantasia);

        // foreach ($busca as $key => $buscar) {

        //     if ($buscar != '') {

        if (!is_null($result = contrato::where($escolhido, $id)->get()->first())) {
            $result = contrato::where($escolhido, $id)->get();
            return view('components.search', compact('result'));
        } else {

            return view('components.form-search', compact('escolhido'));
        }
        // }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }
    public function exibir()
    {
        $contrato = contrato::all();

        return view('components.edit', compact('contrato'));
    }

    public function exibirDelete()
    {
        $result = contrato::all();

        return view('components.modal-pesquisa', compact('result'));
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
    }

    public function updateTable(Request $req)
    {
        // if ($req->hasFile('logomarca')) {
        //     foreach ($req->file('logomarca') as $item) {
        //         $filename = time() . '_' . $item->getClientOriginalName();
        //         $item->move('public/logomarca', $filename);
        //     }
        // }

        $colunas = array(
            'id' => $req->get('id'),
            'cnpj' => $req->get('cnpj'),
            'razao_social' =>   $req->get('razao_social'),
            'nome_fantasia' =>  $req->get('nome_fantasia'),
            'email' => $req->get('email'),
            'in_User' =>    $req->get('in_User'),
            'status' => $req->get('status'),
        );

        $colunas = json_encode($colunas);
        $colunas = json_decode($colunas, true);

        for ($i = 0; $i < count($colunas['id']); $i++) {
            foreach ($colunas as $coluna => $valor) {
                contrato::where('id', $colunas['id'][$i])->update([$coluna => $valor[$i]]);
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
     contrato::where('id',$id)->delete();

        return redirect('/home')->with('status','Exclusão bem sucedida');
    }
}
