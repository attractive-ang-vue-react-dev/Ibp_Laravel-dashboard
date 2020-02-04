<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('admin.pages.catalog.catalog', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $imgString = $this->store(request());

        $data = [
            'title' => request('product_title'),
            'description' => request('product_description'),
            'ingredients' => request('product_ingredients'),
            'preservation' => request('product_preservation'),
            'packaging' => request('product_packaging'),
            'categories' => request('product_categories'),
            'certifications' => request('product_certifications'),
            'images' => $imgString
        ];

        Product::create($data);

        return view('admin.pages.product.product', array('status' => 'Product added'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $path = '/storage/products/';
        $imageString = '';


        if ($request->hasFile('product_images')) {
            $allowedfileExtension = ['jpg', 'png'];
            $files = $request->file('product_images');
            $i = 0;
            foreach ($files as $photo) {

                $img = time() .  ($i + 1) . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path($path), $img);
                $i++;

                $imageString .= $img . ',';
            }
        }

        return $imageString;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::where('id', $id)->first();
        return view('admin.pages.product.edit',compact('product', $product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $imgString = $this->store(request());


        $data = [
            'title' => request('product_title'),
            'description' => request('product_description'),
            'ingredients' => request('product_ingredients'),
            'preservation' => request('product_preservation'),
            'packaging' => request('product_packaging'),
            'categories' => request('product_categories'),
            'certifications' => request('product_certifications'),
            'images' => $imgString
        ];


         Product::where('id', $id)->update($data);


        $product = Product::where('id', $id)->first();


        return view('admin.pages.product.edit', array('product' => $product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();

        $products = Product::all();

        return view('admin.pages.catalog.catalog', ['products' => $products]);
    }
}
