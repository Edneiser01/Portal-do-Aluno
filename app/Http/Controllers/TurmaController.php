<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;

class TurmaController extends Controller
{
    public function index (Turma $turmas){

       $turmas = $turmas->all();
       #dd($turmas);

        return view('turma/index', compact('turmas'));
    }

    public function show ( string | int $id){
        
        if (!$turmas = Turma:: find($id)){
            return back();
        }
       
        return view ('turma/show', compact ('turmas'));

    }

    public function create( ) {

        return view ('turma/create');
    }

    public function store (Request $request, Turma $turmas){

        
        $data = $request -> all();
        $turmas = $turmas -> create($data);
        #dd($turmas);

        return redirect() -> route('turma.index');    
    }

    public function edit (string | int $id){

        if (!$turmas = Turma:: find($id)){
            return back();
        }
       
        return view ('turma/edit', compact ('turmas'));

    }
   
    public function update (Request $request,Turma $turmas ,string | int $id, ){

        if (!$turmas = Turma:: find($id)){
            return back();  
        }
       
        $turmas -> update($request -> only([
            'nome'
        ]));

        return redirect() -> route('turma.index');
    }

    public function destroy( String | int $id){

        if (!$turmas = Turma:: find($id)){
            return back();  
        }

        $turmas -> delete();

        return redirect() -> route('turma.index');
    }
}

