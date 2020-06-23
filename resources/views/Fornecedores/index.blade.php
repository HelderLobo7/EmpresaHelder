@extends('layout')
@section('titulo')
Fornecedores
@endsection
@section('conteudo')

<h1>Fornecedores</h1>
@foreach($fornecedor as $fornecedores)


Id dos Fornecedores:  {{$fornecedores->id_fornecedores}}<br>
Designação:  <a href="{{route('fornecedores.show',['id'=>$fornecedores->id_fornecedores])}}"> {{$fornecedores->designacao}}<br><br></a>

@endforeach<br>
{{$fornecedores->render()}}
@endsection 
