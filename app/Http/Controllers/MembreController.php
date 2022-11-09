<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembreController extends Controller
{
    public function home()
    {
        $membres = Membre::all();
        return view('home', compact('membres'));
    }

    public function create()
    {
        return view('pages.create.create');
    }

    public function store(Request $request)
    {
        $store = new Membre();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;

        $store->save();
        return redirect('/');
    }

    public function show($id)
    {
        $show = Membre::find($id);
        return view('pages.show.show', compact('show'));
    }

    public function edit($id)
    {
        $edit = Membre::find($id);
        return view('pages.edit.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Membre::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;

        $update->save();
        return redirect('/');
    }

    public function destroy(Membre $id)
    {
        $id->delete();
        return redirect('/');
    }

    public function allDestroy()
    {
        DB::table('membres')->truncate();
        return redirect()->back();
    }
}
