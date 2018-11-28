@extends('layout.principal')

@section('conteudo')


<h1> Atualiza Produto </h1>
<form action="/Produtos/atualiza/{{$p->id}}" method="post">
 @csrf
    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome" value="{{$p->nome}}">
        </input>
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="descricao" value="{{$p->descricao}}">
        </input>
    </div>
    

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor" value="{{$p->valor}}"></input>
    </div>
    <div class="form-group">    
        <label>Quantidade</label>
        <input type="number" class="form-control" name="quantidade" value="{{$p->quantidade}}"></input>
    </div>
    <div class="form-group">
        <button type="Submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>

@stop
    