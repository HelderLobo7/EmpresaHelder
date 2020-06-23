@extends('layout')
@section('titulo')
Categorias
@endsection
@section('conteudo')


<h2>Detalhes sobre as  saidas:    {{$ saidas->id_saidas}}<br><br></h2>

Id da SAíDA:  {{$ saidas->id_saida}}<br><br>
DESCRIÇÃO:  {{$ saidas->descrição}}<br><br>
DATA DA SAÌDA:  {{$ saidas->data_saida}}<br><br>
ID PRODUTO:  {{$ saidas->id_produto}}<br><br>
QUANTIDADE:  {{$ saidas->quantidade}}<br><br>
IMPRESSORA:  {{$ saidas->impressora}}<br><br>
PRECO:  {{$ saidas->preco}}<br><br>

@endsection