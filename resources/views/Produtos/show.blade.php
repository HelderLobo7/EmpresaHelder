
@extends('layout')
@section('titulo')
Produtos
@endsection
@section('conteudo')


<h2>Detalhes sobre o Produto:    {{$produto->id_produto}}<br><br></h2>

Id do Produto:  {{$produto->id_produto}}<br><br>
Designação:  {{$produto->designacao}}<br><br>
Quantidade:  {{$produto->qt_stock}}<br><br>
Preço:  {{$produto->preco}}<br><br>
Id Categoria:  {{$produto->id_categoria}}<br><br>



@endsection 