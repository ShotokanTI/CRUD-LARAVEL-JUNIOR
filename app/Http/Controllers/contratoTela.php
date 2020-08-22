<?php

namespace App\Http\Controllers;

use App\contrato;
use Illuminate\Http\Request;
class ContratoTela extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $contrato = contrato::all();

        return view('contrato.contrato',compact('contrato'));

    }

    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrato.contrato');
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
            'razao_social' => 'required|max:30',
            'nome_fantasia' => 'required|max:30',
            'e-mail' => 'required',
            'in_User' => 'required',
            'logomarca' => 'required',
            'status' => 'required',
        ]);

        $contrato = new contrato([
            'cnpj' => $request->get('cnpj'),
            'razao_social' =>   $request->get('razao_social'),
            'nome_fantasia' =>  $request->get('nome_fantasia'),
            'e-mail' => $request->get('e-mail'),
            'in_User' =>    json_encode($request->get('in_User')),
            'logomarca' =>  $request->get('logomarca'),
            'status' => $request->get('status'),
        ]);

        $contrato->save();

        return redirect('/contratoTela')->with('status', 'Inclusão de contrato feito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        function formatCnpjCpf($id)
        {
            $cnpj_cpf = preg_replace("/\D/", '', $id);

            if (strlen($cnpj_cpf) === 11) {
                return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
            }

            return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
        }

        $cnpj = formatCnpjCpf($id);
        $searchCNPJ=contrato::all();
         $searchCNPJ=contrato::where('cnpj',$cnpj)->get();

         var_dump($searchCNPJ);
            return view('contrato.contrato',compact('searchCNPJ'));

       // return response()->json(array('success' => true, 'html'=>$returnhtml));


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
