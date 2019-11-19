<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cadastro;
use Illuminate\Support\Facades\DB;
class Cadastro_Controller extends Controller
{
    public $cadastros;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cadastros = Cadastro::all();
    	return view('index', compact('Cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cadastro::create( $request->all() );
        return redirect('index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $project = Cadastro::find($id);
        //return view('show', compact('Cadastro'));
         $cadastros = Cadastro::find($id);
         return view('mostrar', compact('Cadastro', 'cadastros'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $cadastros = Cadastro::find($id);
        echo "Item: ".$cadastros->id;
        return view('atualiza', compact('Cadastro', 'cadastros'));
        
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
        $dataform = $request->all();
        $produto = Cadastro::find($id);
        $update = $produto->update($dataform);
        
        if( $update )
            return redirect()->route('products');
        else
            echo "Erro";
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastros = Cadastro::find($id);
        $delete = $cadastros->delete($id);
        return redirect()->route('index');

        
    }
    public function antentica(Request $request){
        $email = $request->email;
        $senha = $request->senha;
        echo $email." ".$senha;
        $cadastros = Cadastro::all();
    	return view('login', compact('Cadastros'));
    }

}
