<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Products::all();
        return view('admin.allproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companynames = \App\CompanyName::all();
        $tyresizes = \App\TyreSize::all();
        $aspectratios = \App\AspectRatio::all();
        $rimsizes = \App\RimSize::all();

        return view('admin.create', compact('companynames', 'tyresizes', 'aspectratios', 'rimsizes' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $data = request()->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:8192'],
            'price' => 'required',
            'rimsize' => 'required',
            'aspectratio' => 'required',
            'tyresize' => 'required',
            'companyname' => 'required',
            'description' => '',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        // $image = Image::make(public_path('/storage/{$imagePath}'))->fit(1000,1000);
        // $image->save();

        // $image = $request->file('image');
        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        // $destinationPath = public_path('/uploads');
        // $img = Image::make($image->getRealPath());
        // $image->resize(100,100, function($constraint) {
        //     $constraint->aspectRatio();
        // })->save($destinationPath.'/'.$input['imagename']);

        \App\Products::create([
            'companyname'   => $data['companyname'],
            'tyresize'      => $data['tyresize'],
            'aspectratio'   => $data['aspectratio'],
            'rimsize'       => $data['rimsize'],
            'description'   => $data['description'],
            'price'         => $data['price'],
            'image'         => $imagePath,
        ]);

        return redirect(route('admin.allproduct'))->with('message', 'New Product Successful Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Products::findOrFail($id);
        $aspectratios = \App\AspectRatio::all();
        $companynames = \App\CompanyName::all();
        $rimsizes = \App\RimSize::all();
        $tyresizes = \App\TyreSize::all();

        return view('admin.edit', compact('product', 'aspectratios', 'companynames', 'rimsizes', 'tyresizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'companyname' => 'required',
            'tyresize' => 'required',
            'aspectratio' => 'required',
            'rimsize' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $productupdate = \App\Products::find($id);
        $productupdate->companyname = $data['companyname'];
        $productupdate->tyresize = $data['tyresize'];
        $productupdate->aspectratio = $data['aspectratio'];
        $productupdate->rimsize = $data['rimsize'];
        $productupdate->description = $data['description'];
        $productupdate->price = $data['price'];

        return redirect(route('admin.allproduct'))->with('message', 'Product Updated Successfully');

        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Products::find($id)->delete();
        
        return redirect(route('admin.allproduct'))->with('message', 'Product Deleted Successfully');
    }
}
