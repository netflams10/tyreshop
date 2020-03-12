<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class TyresController extends Controller
{
    public function index() {
        $tyresizes = \App\TyreSize::all();
        $aspectratios = \App\AspectRatio::all();
        $rimsizes = \App\RimSize::all();
        return view('front.home', compact('tyresizes', 'aspectratios', 'rimsizes'));
    }

    public function search(Request $request) {
        $data = request()->validate([
            'tyresize' => 'required',
            'aspectratio' => 'required',
            'rimsize' => 'required',
        ]);

        $datas = Products::where(
                'tyresize', 'like', $data['tyresize'],)
                ->where('aspectratio', 'like', $data['aspectratio'])
                ->where('rimsize', 'like', $data['rimsize'])
                ->get();
        
        return view('front.result', compact('datas'));
        // dd($datas);
        // echo $data;
    }
}
