<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Saida;
class SaidaController extends Controller
{
    public function index(){
        
        $saidas=Saida::paginate(2);
        return view('saidas.index', [
           'saidas'=>$saidas
        ]);
        
    }
    
    public function show (Request $request)
    {
        $idSaida=$request->id;  
        
        $saida=Saida::findOrFail($idSaida);
        
        return view('saidas.show',[
            'saida'=>$saida,
        ]);
    }
    
    
    
     public function edit(Request $request)
    {
        $saida=Saida::findOrFail($request->id);
        
        return view('saidas.edit',[
            'saida'=>$saida
        ]);
    }
    
    public function update(Request $request)
    {
        $saida=Saida::findOrFail($request->id);
        $campos=$request->validate([
            'data_saida'=>['required'],
            'id_produto'=>['nullable','min:1','max:10'],
            'descricao'=>['nullable','max:255'],
            'quantidade'=>['nullable','max:11'],
            'impressora'=>['nullable','max:255'],
            'preco'=>['nullable','max:11']
        ]);
        
        $saida->update($campos);
        
        return redirect()->route('saidas.index',[
            'id'=>$saida->id_saida
        ])->with('editado',"A Saída foi EDITADO com sucesso!");
    }
}
    
    
 
