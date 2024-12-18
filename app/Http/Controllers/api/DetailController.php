<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        return response()->json(Work::find($id)->details, 200);
    
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $workId)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'company_name' => 'required|array',
        'company_name.*' => 'required|string',
        'location' => 'required|array',
        'location.*' => 'required|string',
        'comment' => 'nullable|array',
        'comment.*' => 'nullable|string',
        'salary' => 'required|array',
        'salary.*' => 'required|numeric',
        'URL' => 'nullable|array',
        'URL.*' => 'nullable|url',
    ]);

    
    $work = Work::find($workId);
    if (!$work) {
        return response()->json(['error' => 'Work not found'], 404);
    }
    $count = count($validated['company_name']);
    if ($count !== count($validated['location']) || $count !== count($validated['salary'])) {
        return response()->json(['error' => 'Mismatched data arrays'], 400);
    }

    $detailsData = collect($validated['company_name'])->map(function ($company_nameItem, $index) use ($work, $validated) {
        return [
            'work_id' => $work->id,
            'company_name' => $company_nameItem,
            'location' => $validated['location'][$index] ?? null, 
            'comment' => $validated['comment'][$index] ?? null,
            'salary' => $validated['salary'][$index] ?? null,
            'URL' => $validated['URL'][$index] ?? null,
        ];
    });
    $work->details()->createMany($detailsData);
    return response()->json([
        'message' => 'added correct',
        'work' => $work->load('details'),
    ]);
}    

    /**
     * Display the specified resource.
     */
    public function show(string $workId)
    {
        return response()->json(Work::find($workId), 200);
    }



    /**
     * Update the specified resource in storage.
     */
   
}
