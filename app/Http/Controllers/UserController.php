<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $old_image = $request->old_profile_image;
        $imageName = '';
        if (empty($request->profile_image) || isNull($request->profile_image)) {
            return $imageName;
        }
        if (empty($old_image)) {
            $imageName = time() . '.' . $request->profile_image->getClientOriginalExtension();
        } else {
            $imageName = $old_image;
        }

        $path = '/storage/profile/';

        $request->profile_image->move(public_path($path), $imageName);
        return $imageName;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {




        $request = request();
       $request->validate([
            'phone_number' => 'required|regex:/^\+(?:[0-9] ?){6,14}[0-9]$/',
        ]);

        //
        $user = User::find($id);
        $image = $this->store(request());
        $data = [
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'profile_image' => $image,
            'phone_number' => request('phone_number'),
            'email' => request('email')
        ];

        $user->fill($data);

        $user->save();

        return redirect('/home')->with(['data' => 'profile updated']);
        // return view('admin.pages.profile.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
