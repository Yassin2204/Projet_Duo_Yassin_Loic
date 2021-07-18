<?php

namespace App\Http\Controllers;

use App\Models\HomeDataDyna;
use Illuminate\Http\Request;

class HomeDataDynaController extends Controller
{
    public function store(Request $request){
        $store = new HomeDataDyna;
        $store->icone = $request->icone; 
        $store->sous_titre = $request->sous_titre; 
        $store->p1 = $request->p1; 
        $store->save();
        return redirect('/login');
    }
    public function show($id) {
        $show = HomeDataDyna::find($id);
        return view('pages.BackOfficeShow.HomebackShow', compact('show'));
    }
    public function edit($id) 
    {
        $edit = HomeDataDyna::find($id);
        return view('pages.BackOfficeEdit.HomebackEdit', compact('edit'));
    }
    public function update(Request $request, $id) 
    {
        $update = HomeDataDyna::find($id);
        $update->icone = $request->icone; 
        $update->sous_titre = $request->sous_titre; 
        $update->p1 = $request->p1; 
        $update -> save();
        return redirect('/login');
    }
    public function destroy($id){
        $destroy = HomeDataDyna::find($id);
        $destroy -> delete();
        return redirect('/login');
    }
}
