@extends('layout')
@section('titulo')
Categorias
@endsection
@section('conteudo')


<h2>Detalhes sobre os fornecedores:    {{$fornecedores->id_fornecedores}}<br><br></h2>

Id do Fornecedores:  {{$fornecedores->id fornecedores}}<br><br>
Designação:  {{$fornecedores->designacao}}<br><br>
Morada:  {{$fornecedores->morada}}<br><br>
Telefone:  {{$fornecedores->telefone}}<br><br>
Codigo Postal:  {{$fornecedores->codigo postal}}<br><br>
Email:  {{$fornecedores->email}}<br><br>


@endsection 