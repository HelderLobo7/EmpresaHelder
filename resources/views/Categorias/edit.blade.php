@extends('layout')
@section('titulo')
Produtos
@endsection
@section('conteudo')

<form method="post" action="{{route('categoria.update',['id'=>$categoria->id_categoria])}}">
    @csrf
    @method('PATCH')
    
    <label>Designacao</label>
    <input type="text" value="{{$categoria->designacao}}" name="designacao" required><br>
    @if($errors->has('designacao'))
    Verifique se introduziu o designacao corretamente!!
    @endif
    
    
    
    <input type="submit" value="EDITAR" class="btn btn-secondary btn-lg">

</form>

@endsection
