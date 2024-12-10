<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Detail;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $works = Work::all();
        return view('home', compact('works'));
    
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $work = Work::with('details')->findOrFail($id);
        if ($work)
            return view('show', compact('work'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $work = Work::findOrFail($id);
    return view('works.edit', compact('work'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate input
    $request->validate([
        'job_title' => 'required|string|max:255',
        'status' =>'required|string|max:255',
        'category'=> 'required|string|max:255',
    ]);

    // Find and update the work
    $work = Work::findOrFail($id);
    $work->job_title = $request->job_title;
    $work->status = $request->status;
    $work->category = $request->category;
    $work->save();

    // Redirect to the index or success page
    return redirect()->route('home', $work->id)->with('success', 'Work updated successfully!');

}


    /**
     * Remove the specified resource from storage.
     */
}
