@extends('layout')
@section('titulo')
Saídas
@endsection
@section('conteudo')

<h1>Fornecedores</h1>
@foreach($saida as $saidas)


Id da Saidas:  {{$saidas->id_saidass}}<br>
Decrição:  <a href="{{route('saidas.show',['id'=>$saidas->id_saidas])}}"> {{$saidas->descricao}}<br><br></a>

@endforeach<br>
{{$saidas->render()}}
@endsection 
