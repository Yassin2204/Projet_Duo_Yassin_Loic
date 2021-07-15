<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolioDataDyna;

class PortfolioDataDynaController extends Controller
{
    public function store(Request $request){
        $store = new PortfolioDataDyna;
        $store->photo = $request->photo; 
        $store->sous_titre = $request->sous_titre; 
        $store->p1 = $request->p1; 
        $store->save();
        return redirect('/PortfoliobackOffice');
    }
    public function destroy($id){
        $destroy = PortfolioDataDyna::find($id);
        $destroy -> delete();
        return redirect('/PortfoliobackOffice');
    }
}
