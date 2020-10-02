<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico; // adicionado model



class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();

        return view('servicos.index', compact('servicos'));
    }

  
    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {

        $contact = new Servico([
            'descricao' => $request->get('descricao'),
            'valor' => $request->get('valor'),
        ]);
        $contact->save();
        return redirect('/servicos')->with('success', 'Servico saved!');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $servicos = Servico::find($id);
        return view('servicos.edit', compact('servicos'));    
    }

 
    public function update(Request $request, $id)
    {

        $servicos = Servico::find($id);
        $servicos->descricao =  $request->get('descricao');
        $servicos->valor = $request->get('valor');
        $servicos->save();

        return redirect('/servicos')->with('success', 'servico updated!');
    }

   
    public function destroy($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();
        return redirect('/servicos')->with('success', 'Servico deletado!');
    }
}
