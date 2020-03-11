<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyNameController extends Controller
{
    public function store(Request $request) {
        $data = request()->validate([
            'companyname' => ['required',]
        ]);

        \App\CompanyName::create($data);

        return redirect(route('admin.create'))->with('message', 'New Tyre Company Name Submitted');
    }
}
