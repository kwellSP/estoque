<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Http\Controllers\Controller;
use estoque\Produto;
use Request;
use estoque\Http\Requests\ProdutosRequest;
use Exception;


class ProdutoController extends Controller{

    public function __construct(){
                    $this->middleware('auth',['only' =>['adiciona','remove','novo','update']]);
                    //$this->middleware('auth')->only('adiciona');
                    //$this->middleware('auth');            
    }

    public function lista(){      
            $produtos = Produto::all();
            if(view()->exists('produto.listagem')){
                return view('produto.listagem')->withProdutos($produtos);
            }      
    }
    public function  update($id){        
        $id = Request::route('id');
        $produto = Produto::find($id);
        return view('produto.update')->with('p',$produto);
    }

    public function atualiza($id){
        $params = Request::all();
        $produto = Produto::find($id);
        $produto->nome = $params['nome'];
        $produto->valor =  $params['valor'];
        $produto->descricao =  $params['descricao'];
        $produto->quantidade =  $params['quantidade'];
        $produto->save();
        //Produto::update(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(array($params['nome']));
    }
    
    public function remove($id){
        $produto = Produto::find($id);        
        $produto->delete();
        return redirect()->action('ProdutoController@lista')->withProdutos($produto);
    }

    public function mostra($id){
        if(view()->exists('produto.detalhes')){           
            $id = Request::route('id');
            $produto = Produto::find($id);
            if(empty($produto)){
                return "Esse produto não existe";    
            }else{
                return view('produto.detalhes')->with('p',$produto);
            }
        }
    }

    public function novo(){
        if(view()->exists('produto.formulario')){
            return view('produto.formulario');
        }else{
            return "Erro ao cadastrar novo Produto";  
        }
    }

    public function adiciona(ProdutosRequest $request){   

        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput(request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

}

?>