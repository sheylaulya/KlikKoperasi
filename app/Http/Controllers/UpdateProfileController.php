<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
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
        //
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
        //
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
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;

        if (!$request->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }

        $imageName = time().'.'.$request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;
        
        if ($profile) {
            $profile->image = $imagePath;
        }
        
        if (!$profile) {
            return response()->json([
                'succes' => false,
                'message' => 'Gagal Menyimpan!',
                'data' => $profile
            ], 409);
        }

        $profile->save();


        return redirect()->route('profile.edit')->with('massage', json_encode([
            'success'=> true,
            'message' => 'Data Berhasil Di Update',
        ]));

        // return response()->json([
        //     'succes' => true,
        //     'message' => 'Data Berhasil Di Update',
        // ], 201);
        // return redirect()->route('profile.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
