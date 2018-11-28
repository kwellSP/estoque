@extends('layout.principal')

@section('conteudo')
    @if(empty($produtos))
    <div class="alert alert-danger">
     Você não tem nenhum produto cadastrado!
    </div>


    @else
            <h1 class="text-center"> Listagem de Produtos </h1>
                <table class="table">
                    @foreach($produtos as $p)            
                    <tr class="{{$p->quantidade<=1 ? 'danger' : ''}}">
                        <td>{{$p->nome}}</td>
                        <td>{{$p->valor}}</td>
                        <td>{{$p->descricao}}</td>
                        <td>{{$p->quantidade}}</td>
                        <td><a href="{{action('ProdutoController@mostra',$p->id)}}">
                             <span class="glyphicon glyphicon-search">Busca</span>
                        </a></td>
                        <td><a href="{{action('ProdutoController@remove',$p->id)}}">
                            <span class="glyphicon glyphicon glyphicon-refresh">Apaga</span>
                        </a></td>
                        <td><a href="{{action('ProdutoController@update',$p->id)}}">
                            <span class="glyphicon glyphicon glyphicon-refresh"> Atualiza</span>
                        </a></td>                        
                    </tr>
            
                    @endforeach
                 </table>
    @endif
@if(old('nome'))
<div class="alert alert-sucess">
<strong>Sucesso!</strong> O Produto {{old('nome')}} foi adicionado com sucesso.
</div>
@endif
@stop