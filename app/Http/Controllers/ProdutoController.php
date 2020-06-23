<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
        
        $produtos=Produto::paginate(2);
        return view('produtos.index', [
           'produtos'=>$produtos
        ]);
        
    }
    
    public function show (Request $request)
    {
        $idProduto=$request->id;  
        
        $produto=Produto::findOrFail($idProduto);
        
        return view('produtos.show',[
            'produto'=>$produto,
        ]);
    }
    
    
    
     public function edit(Request $request)
    {
        $produto=Produto::findOrFail($request->id);
        
        return view('produtos.edit',[
            'produto'=>$produto
        ]);
    }
    
    public function update(Request $request)
    {
        $produto=Produto::findOrFail($request->id);
        $campos=$request->validate([
            'designacao'=>['required','min:3','max:100'],
            'quantidade'=>['nullable','min:1','max:100'],
            'preco'=>['nullable','max:255']
        ]);
        
        $produto->update($campos);
        
        return redirect()->route('produtos.index',[
            'id'=>$produto->id_produto
        ])->with('editado',"O Produto foi EDITADO com sucesso!");
    }
}
    
    
 
