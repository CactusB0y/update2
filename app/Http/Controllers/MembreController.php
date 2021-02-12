<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::all();
        return view('welcome',compact('membres'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $store = new Membre;
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Membre::find($id);
        return view('show',compact('show'));
    }

    public function edit($id)
    {
        $edit = Membre::find($id);
        return view('edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Membre::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update->save();
        return redirect('/member-show/'.$update->id);
    }

    public function destroy($id)
    {
        $destroy = Membre::find($id);
        $destroy->delete();
        return redirect('/');
    }

    public function destroyAllHumans()
    {
        $atomique = Membre::all();
        foreach ($atomique as $item) {
            $item->delete();
        }

        //method 2
        //Membre::truncate();

        
        return redirect('/');
    }
}
