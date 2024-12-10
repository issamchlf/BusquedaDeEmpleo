<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::all();

        return response()->json(Work::all(), 200);
    }
    

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $works = Work::create([
            'job_title' => $request->job_title,
            'status' => $request->status,
            'category'=> $request->category
        ]);

        $works->save();
        return response()->json($works, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Work::find($id), 200);
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
        $works = Work::find($id);
        
        $works->update([
            'job_title' => $request->job_title,
            'status' => $request->status,
            'category'=> $request->category
        ]);

        $works->save();
        return response()->json($works, 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $works = Work::find($id);

        $works->delete();

        $message = [
            'message' => 'The record was seccesfully deleted from the Application'
        ];
        return response()->json($message, 200);
    }
}
