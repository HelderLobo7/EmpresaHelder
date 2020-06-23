<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Fornecedor;
class ForneceController extends Controller
{
    public function index(){
        
        $fornecedores=Fornecedor::paginate(2);
        return view('fornecedores.index', [
           'fornecedores'=>$fornecedores
        ]);
        
    }
    
    public function show (Request $request)
    {
        $idfornecedor=$request->id;  
        
        $fornecedor=Fornecedor::findOrFail($idfornecedor);
        
        return view('fornecedores.show',[
            'fornecedor'=>$fornecedor,
        ]);
    }
    
    
    
     public function edit(Request $request)
    {
        $fornecedor=Fornecedor::findOrFail($request->id);
        
        return view('fornecedores.edit',[
            'fornecedor'=>$fornecedor
        ]);
    }
    
    public function update(Request $request)
    {
        $fornecedor=Fornecedor::findOrFail($request->id);
        $campos=$request->validate([
            'designacao'=>['required','min:3','max:100'],
            'morada'=>['nullable','min:1','max:100'],
            'telefone'=>['nullable','max:9'],
            'codigo postal'=>['nullable','max:8'],
            'email'=>['nullable','max:255'],
        ]);
        
        $fornecedor->update($campos);
        
        return redirect()->route('fornecedores.index',[
            'id'=>$fornecedor->id_fornecedor
        ])->with('editado',"O fornecedor foi EDITADO com sucesso!");
    }
}
    
    
 
fornecedor;