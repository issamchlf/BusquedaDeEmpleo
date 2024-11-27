<?php

namespace App\Http\Controllers\Api;

use App\Models\offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = offer::all();
        return response()->json($offers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offers = offer::create([
            'company_name' => $request->company_name,
            'location' => $request->location,
            'comment' => $request->comment,
            'salary' => $request->salary
        ]);
        $offers->save();
        return response()->json($offers, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offers = offer::find($id);
        return response()->json($offers, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offers = offer::find($id);

        $offers->update([
            'company_name' => $request->company_name,
            'location' => $request->location,
            'comment' => $request->comment,
            'salary' => $request->salary
        ]);
        $offers->save();
        return response()->json($offers, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offers = offer::find($id);
        $offers->delete();
        $message = [
            'message' => 'the recorde was seccesfully deleted from the Application'
        ];
        return response()->json($message, 200);
    }
}
