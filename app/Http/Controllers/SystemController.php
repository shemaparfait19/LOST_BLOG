<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    
    public function index()
    {
        $systems = System::all(); 
        
        return view('blog.index', compact('systems'));
    }

    
    public function create()
    {
        return view('blog.create'); 
    }

    
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'fewdesc' => 'required',
            'moredesc' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $storagePath = public_path('images/stored');

            if (!file_exists($storagePath)) {
                mkdir($storagePath, 0755, true);
            }

            $image->move($storagePath, $imageName);
        }

        System::create([
            'title' => $request->title,
            'image' => "images/stored/{$imageName}",
            'fewdesc' => $request->fewdesc,
            'moredesc' => $request->moredesc,
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }
    
    public function edit($id)
    {
        $system = System::findOrFail($id); 
        
        return view('blog.edit', compact('system')); 
    }

    
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,webp', 
            'fewdesc' => 'required',
            'moredesc' => 'required',
        ]);

        $system = System::findOrFail($id);
        $system->fill($request->only(['title', 'fewdesc', 'moredesc']));

        
        if ($request->hasFile('image')) {
            
            $system->image = $request->file('image')->store('images/stored', 'public');
        }

        $system->save(); 

        
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
    }

    
    public function destroy($id)
    {
        $system = System::findOrFail($id); 
        $system->delete(); 

        
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully!');
    }

    public function guest(){
        $systems = System::orderBy('created_at', 'desc')->get();
        return view('blog.guest', compact('systems'));
    }

    public function show($id) {
        $system = System::findOrFail($id); 
        return view('blog.show', compact('system')); 
    }
    
}

