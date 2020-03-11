<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewSizeController extends Controller
{


    public function create() {
        return view('admin.newsize');
    }



    public function store(Request $request) {

        $data = request()->validate([
            'tyresize' => ['required', 'integer'],
        ]);

        \App\TyreSize::create($data);

        return redirect(route('admin.create'))->with('message', 'New Tyre Size Submitted');
    }


}
