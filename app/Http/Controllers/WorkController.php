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
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
