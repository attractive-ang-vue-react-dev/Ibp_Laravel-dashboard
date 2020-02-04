<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // echo $user->email;
        $supplier = Supplier::where('email', $user->email)->first();

        return view('admin.pages.supplier.supplier', array('supplier' => $supplier));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'first_name' => request('first_name'), 'last_name' => request('last_name'), 'email' => request('email'),
            'phone_number' => request('phone_number'), 'company_name' => request('company_name'), 'company_address' => request('company_address'),
            'company_address' => request('company_address'), 'incorporation_number' => request('incorporation_number'), 'tax_number' => request('tax_number'),
            'company_size' => request('company_size'), 'presentation' => request('presentation')
        ];


        $supplier = Supplier::create($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $old_banner_img = $request->old_banner_img;
        $old_logo_img = $request->old_logo_img;

        $bannerImageName = '';
        $logoImageName = '';

        $path = '/storage/supplier/';

        if (empty($old_banner_img)) {
            $bannerImageName = time() . '.' . $request->banner_img->getClientOriginalExtension();
        } else {
            $bannerImageName = $old_banner_img;
        }


        if (empty($old_logo_img)) {
            $logoImageName = time() . random_int(1, 3) . '.' . $request->logo_img->getClientOriginalExtension();
        } else {
            $logoImageName = $old_logo_img;
        }

        $request->banner_img->move(public_path($path), $bannerImageName);
        $request->logo_img->move(public_path($path), $logoImageName);

        return array($bannerImageName, $logoImageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {


        $user = Auth::user();
        $images = $this->store(request());

        $fillData = [
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),

            'phone_number' => request('phone_number'),
            'company_name' => request('company_name'),
            'company_address' => request('company_address'),

            'incorporation_number' => request('incorporation_number'),
            'tax_number' => request('tax_number'),

            'company_size' => request('company_size'),

            'banner_img_url' => $images[0],
            'logo_url' => $images[1],

            'presentation' => json_encode(request('presentation')),
            'language' => request('language'),

        ];


        $supplier::where('email', request('email'))->update($fillData);

        $supplier = Supplier::where('email', $user->email)->first();
        // redirect('/admin/supplier')->with(array('supplier' => $supplier));
        return view('admin.pages.supplier.supplier', array('supplier' => $supplier));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
