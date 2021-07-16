<?php

namespace App\Http\Controllers;

use App\Models\BlogDataDyna;
use Illuminate\Http\Request;

class BlogDataDynaController extends Controller
{
    public function store(Request $request){
        $store = new BlogDataDyna;
        $store->photo = $request->photo; 
        $store->sous_titre = $request->sous_titre; 
        $store->p1 = $request->p1; 
        $store -> save();
        return redirect('/BlogbackOffice');
    }
    public function show($id) {
        $show = BlogDataDyna::find($id);
        return view('pages.BackOfficeShow.BlogBackShow', compact('show'));
    }
    public function edit($id) 
    {
        $edit = BlogDataDyna::find($id);
        return view('pages.BackOfficeEdit.BlogbackEdit', compact('edit'));
    }
    public function update(Request $request, $id) 
    {
        $update = BlogDataDyna::find($id);
        $update->photo = $request->photo; 
        $update->sous_titre = $request->sous_titre; 
        $update->p1 = $request->p1; 
        $update -> save();
        return redirect('/BlogbackOffice');
    }
    public function destroy($id){
        $destroy = BlogDataDyna::find($id);
        $destroy -> delete();
        return redirect('/BlogbackOffice');
    }

}
