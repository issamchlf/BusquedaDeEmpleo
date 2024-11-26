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
        $Applications = Application::all();

        return response()->json($Applications, 200);
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
        $Application = Application::create([
            'job title' => $request->JobTitle,
            'Status' => $request->status,
            'category'=> $request->category
        ]);

        $Application->save();
        return response()->json($$application, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $application = Application::find($id);

        return response()->json($application, 200);
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
        $application = Application::find($id);
        
        $application->update([
            'job title' => $request->JobTitle,
            'Status' => $request->status,
            'category'=> $request->category
        ]);

        $application->save();
        return response()->json($application, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $application = Application::find($id);

        $application->delete();

        $message = [
            'message' => 'The record was seccesfully deleted from the journal'
        ];
        return response()->json($message, 200);
    }
}
