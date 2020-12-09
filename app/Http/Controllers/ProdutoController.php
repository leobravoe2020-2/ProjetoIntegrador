<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produto;
use App\TipoProduto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Buscar os dados que estão na tabela Produtos
        $produtos = DB::select("select Produtos.id, Produtos.nome, Produtos.preco, Tipo_Produtos.descricao from Produtos
                                join Tipo_Produtos on Produtos.Tipo_Produtos_id = Tipo_Produtos.id");                        
        return view('Produto.index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('Produto.create')->with('tipoProdutos', $tipoProdutos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
        $produto->save();
        // Retorna a execução do método index
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Buscar o dado que está na tabela Produtos
        $produto = Produto::find($id);
        if(isset($produto))
        {
            // Busca o dado que está na tabela Tipo_Produtos
            $tipoProduto = TipoProduto::find($produto->Tipo_Produtos_id);
            return view('Produto.show')->with('produto', $produto)->with('tipoProduto', $tipoProduto);
        }
        // #TODO ajustar a página de erro
        return 'Não encontrado';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Buscar os dados que estão na tabela Tipo_Produtos
        $produto = Produto::find($id);
        if(isset($produto))
        {
            $tipoProdutos = DB::select('select * from Tipo_Produtos');
            return view('Produto.edit')->with('produto', $produto)->with('tipoProdutos', $tipoProdutos);
        }
        // #TODO ajustar a página de erro
        return 'Não encontrado';
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
        // Buscar os dados que estão na tabela Tipo_Produtos
        $produto = Produto::find($id);
        if(isset($produto))
        {
            $produto->nome = $request->nome;
            $produto->preco = $request->preco;
            $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
            $produto->update();
            // Retorna a execução do método index
            return $this->index();
        }
        // #TODO ajustar a página de erro
        return 'Não encontrado update';
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
