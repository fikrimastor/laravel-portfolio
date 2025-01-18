<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Experience;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Experience/List', [
            'title' => 'View Experiences',
            'experiences' => Experience::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Experience/Create', [
            'title' => 'Create New Experience',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->experiences()->create([
            'entity_name' => $validated['entity_name'],
            'type' => $validated['type'],
            'entity_website_url' => $validated['entity_website_url'],
            'is_active' => $validated['is_active'],
        ]);

        return Redirect::route('experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        return Redirect::route('experience.index');
    }
}
