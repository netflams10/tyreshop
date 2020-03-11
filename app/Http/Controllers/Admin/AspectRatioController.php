<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AspectRatioController extends Controller
{
    public function store(Request $request) {
        $data = request()->validate([
            'aspectratio' => ['required', 'integer'],
        ]);

        \App\AspectRatio::create($data);

        return redirect(route('admin.create'))->with('message', 'New Aspect Ratio Submitted');
    }
}
