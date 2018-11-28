@extends('layout.principal')

@section('conteudo')


<h1> Novo Produto </h1>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors ->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif
<form action="/Produtos/adiciona" method="post">
 @csrf
    <div class="form-group">
        <label>Nome</label>
        <input class="form-control" name="nome" value="{{old('nome')}}">
        </input>
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input class="form-control" name="descricao" value="{{old('descricao')}}">
        </input>
    </div>
    

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor" value="{{old('valor')}}"></input>
    </div>
    <div class="form-group">    
        <label>Quantidade</label>
        <input type="number" class="form-control" name="quantidade" value="{{old('quantidade')}}"></input>
    </div>
    <div class="form-group">
        <button type="Submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>

@stop
    