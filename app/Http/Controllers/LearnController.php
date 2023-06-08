<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class LearnController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(21);
        return view('learn.index', 
            compact('artikels'), [
            'title' => 'learn'
        ]);
    }

    public function create()
    {
        return view('learn.create', [
            'title' => 'Create Article'
        ]);
    }

    public function artikel(Request $request) {
        $validatedData = $request->validate([
            'judul' => 'required|max:50',
            'isi' => 'required',
            'image' => 'image|file|max:2048',
        ]);
    
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
    
        $artikel = new Artikel($validatedData);
        $artikel->owner = auth()->user()->name;
        $artikel->mitra_id = auth()->id();
        $artikel->save();
    
        // Redirect or do something else after successful creation
        return redirect('/learn')->with('success', 'Barang created successfully');
    }

    public function isi($id) {
        $artikels = Artikel::where('id', $id)->first();

        return view('learn.data', 
            compact('artikels'), [
            'title' => 'Artikel'
        ]);
    }

    public function editlearn($id) {
        $artikels = Artikel::findOrFail($id);
        
        return view('learn.editlearn', compact('artikels'), [
            'title' => 'edit'
        ]);
    }

    public function update(Request $request, $id) {
        $artikels = Artikel::find($id);

        $artikels->update($request->all());
    
        // Redirect or do something else after successful creation
        return redirect('learn')->with('success', 'Barang created successfully');
    }

    public function delete($id) {
        $artikels = Artikel::findOrFail($id);

        $artikels->delete();

        return redirect()->route('learn')->with('success', 'Barang deleted successfully');
    }
}
