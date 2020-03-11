<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RimsizeController extends Controller
{
    public function store(Request $request) {
        $data = request()->validate([
            'rimsize' => ['required', 'integer']
        ]);

        \App\RimSize::create($data);

        return redirect(route('admin.create'))->with('message', 'New Rim Size Submitted');
    }
}
