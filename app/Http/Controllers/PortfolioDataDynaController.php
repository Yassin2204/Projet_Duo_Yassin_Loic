<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolioDataDyna;

class PortfolioDataDynaController extends Controller
{
    public function store(Request $request)
    {
        $store = new PortfolioDataDyna;
        $store->photo = $request->photo;
        $store->sous_titre = $request->sous_titre;
        $store->p1 = $request->p1;
        $store->save();
        return redirect('/PortfoliobackOffice');
    }
    public function show($id)
    {
        $show = PortfolioDataDyna::find($id);
        return view('pages.BackOfficeShow.PortfoliobackShow', compact('show'));
    }
    public function edit($id)
    {
        $edit = PortfolioDataDyna::find($id);
        return view('pages.BackOfficeEdit.PortfoliobackEdit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update = PortfolioDataDyna::find($id);
        $update->photo = $request->photo;
        $update->sous_titre = $request->sous_titre;
        $update->p1 = $request->p1;
        $update->save();
        return redirect('/PortfoliobackOffice');
    }
    public function destroy($id)
    {
        $destroy = PortfolioDataDyna::find($id);
        $destroy->delete();
        return redirect('/PortfoliobackOffice');
    }
}
