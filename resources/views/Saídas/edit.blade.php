@extends('layout')
@section('titulo')
Produtos
@endsection
@section('conteudo')

<form method="post" action="{{route('saidas.update',['id'=>$saidas->id_saidas])}}">
    @csrf
    @method('PATCH')
    
    <label>Descricao</label>
    <input type="text" value="{{$saidas->descricao}}" name="descricao" required><br>
    @if($errors->has('descricao'))
    Verifique se introduziu a descrição corretamente!!
    @endif
    
    
    
    <input type="submit" value="EDITAR" class="btn btn-secondary btn-lg">

</form>

@endsection