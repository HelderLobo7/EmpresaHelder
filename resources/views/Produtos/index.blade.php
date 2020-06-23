
@extends('layout')
@section('titulo')
Produtos
@endsection
@section('conteudo')

<h1>Produtos</h1>
@foreach($produtos as $produto)


Id do Produto:  {{$produto->id_produto}}<br>
Produto:  <a href="{{route('produtos.show',['id'=>$produto->id_produto])}}"> {{$produto->designacao}}<br><br></a>

@endforeach<br>
{{$produtos->render()}}
@endsection 