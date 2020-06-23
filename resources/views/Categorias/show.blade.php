@extends('layout')
@section('titulo')
Categorias
@endsection
@section('conteudo')


<h2>Detalhes sobre a Categorias:    {{$categoria->id categoria}}<br><br></h2>

Id da Categoria:  {{$categoria->id categoria}}<br><br>
Designação:  {{$categoria->designacao}}<br><br>


@endsection 