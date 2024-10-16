<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class Resource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return response()->json($activities);
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
        $this->validateRequest($request);
        $newactivity = Activity::create($request->all());
        return response()->json($newactivity,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        return response()->json($activity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());
        return response()->json($activity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return response()->json(null,204);
    }

    private function validateRequest(Request $request){
        $request->validate([
            'type' => 'required|string',
            'user_id' => 'required|integer',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer'
        ]);
    }
}
