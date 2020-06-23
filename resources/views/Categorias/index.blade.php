@extends('layout')
@section('titulo')
Produtos
@endsection
@section('conteudo')

<h1>Categoria</h1>
@foreach($categorias as $categoria)


Id da Categoria:  {{$categoria->id categoria}}<br>
Designação:  <a href="{{route('categoria.show',['id'=>$categoria->id categoria])}}"> {{$categoria->designacao}}<br><br></a>

@endforeach<br>
{{$categoria->render()}}
@endsection 