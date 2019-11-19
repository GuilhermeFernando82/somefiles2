<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cadastro;

class ProductController extends Controller
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
    	return view('index', compact('cadastros'));
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
    public function store(Request $request, Cadastro $cadastros)
    {
        //Cadastro::create( $request->all() );
        //return redirect('index');




            $image = $request->file('primaryImage');


            /*
            $name = time();
            $destinationPath = public_path('~/Gebit/learning-project/image/');
            $image->move($destinationPath, $name);
            */
            $cadastros->name = $request->name;
            $cadastros->descrition = $request->desc;
            $cadastros->piciture = $image->store('/users');
            $cadastros->save();

            return redirect('products');


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
        return view('products'.$id.'atualiza', compact('products', 'cadastros'));

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
        $image = $request->file('primaryImage');


            /*
            $name = time();
            $destinationPath = public_path('~/Gebit/learning-project/image/');
            $image->move($destinationPath, $name);
            */
            $cadastros->name = $request->name;
            $cadastros->descrition = $request->desc;
            $cadastros->piciture = $image->store('/users');
    
        ///$dataform = $request->all();
        $produto = Cadastro::find($id);
        $update = $produto->update($cadastros);

        if( $update )
            return "Okay";
        else
            return "Ops";
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

}
