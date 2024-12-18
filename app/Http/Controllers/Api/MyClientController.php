<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MyClient;
use Illuminate\Http\Request;

class MyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $myclients = MyClient::all();
        return response()->json($myclients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // var_dump("heloo");
        // die;
        // $request->validate([
        //     'name' => 'required|string|max:250',
        //     'slug' => 'required|string|max:100',
        //     // 'is_project' => 'required|in:0,1',
        //     // 'self_capture' => 'required|string|max:1',
        //     // 'client_prefix' => 'required|string|max:4',
        //     // 'client_logo' => 'required|string|max:255',
        //     // 'address' => 'string',
        //     // 'phone_number' => 'string|max:50',
        //     // 'city' => 'string|max:50',
        // ]);
       

        // MyClient::created($request->all());
        // return response()->json([
        //     'created' => 'success',
        // ]);
        // $myclients = MyClient::all();
        // return response()->json($myclients);
        return response()->json(['message' => 'Logged out successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       
    }
}
