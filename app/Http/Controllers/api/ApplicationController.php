<?php

namespace App\Http\Controllers\Api;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();

        return response()->json($applications, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /**public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applications = Application::create([
            'job_title' => $request->job_title,
            'status' => $request->status,
            'category'=> $request->category
        ]);

        $applications->save();
        return response()->json($applications, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $applications = Application::find($id);

        return response()->json($applications, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //*public function edit(string $id){}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $applications = Application::find($id);
        
        $applications->update([
            'job_title' => $request->job_title,
            'status' => $request->status,
            'category'=> $request->category
        ]);

        $applications->save();
        return response()->json($applications, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $applications = Application::find($id);

        $applications->delete();

        $message = [
            'message' => 'The record was seccesfully deleted from the journal'
        ];
        return response()->json($message, 200);
    }
}
