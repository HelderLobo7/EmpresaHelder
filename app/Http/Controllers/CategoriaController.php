<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Produto;
class CategoriaController extends Controller
{
    public function index(){
        
        $categorias=Categorias::paginate(2);
        return view('categoria.index', [
           'categoria'=>$categorias
        ]);
        
    }
    
    public function show (Request $request)
    {
  $idCategoria=$request->id;  
        
 $categoria=Categorias::findOrFail($idCategoria);
        
        return view('categoria.show',[
            'categoria'=>$categoria,
        ]);
    }
    
    
    
     public function edit(Request $request)
    {
        $categoria=Categorias::findOrFail($request->id);
        
        return view('categoria.edit',[
            'categoria'=>$categoria
        ]);
    }
    
    public function update(Request $request)
    {
        $categoria=Categorias::findOrFail($request->id);
        $campos=$request->validate([
            'designacao'=>['required','min:3','max:100'],
        ]);
        
        $categoria->update($campos);
        
        return redirect()->route('categorias.index',[
            'id'=>$categoria->id_categoria
        ])->with('editado',"A categoria foi EDITADO com sucesso!");
    }
}
    
    
 