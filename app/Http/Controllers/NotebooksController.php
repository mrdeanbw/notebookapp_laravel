<?php

namespace Notebook\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Notebook\Http\Requests;
use Notebook\Notebook;

class NotebooksController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notebooks = $user->notebooks;
        
        return view('notebooks.index', compact('notebooks'));
    }
    
    public function create()
    {
        return view('notebooks.create');
    }
    
    public function store(Request $request)
    {
        $dataInput = $request->all();
        
        $user = Auth::user();
        $user->notebooks()->create($dataInput);
        
        return redirect('/notebooks');
    }
    
    public function edit($id)
    {
        $user = Auth::user();
        $notebook = $user->notebooks()->find($id);
        
        return view('notebooks.edit')->with('notebook', $notebook);
    }
    
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $notebook = $user->notebooks()->find($id);
        $notebook->update($request->all());
        
        return redirect('/notebooks');
    }
    
    public function destroy($id)
    {
        $user = Auth::user();
        $notebook = $user->notebooks()->find($id);
        $notebook->delete();
        
        return redirect('notebooks.index');
    }
    
    public function show($id)
    {
        $notebook = Notebook::findOrFail($id);
        $notes = $notebook->notes;
        
        return view('notes.index', compact('notes', 'notebook'));
    }
}
