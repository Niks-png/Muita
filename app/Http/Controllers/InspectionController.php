<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class InspectionController extends Controller
{
    public function index(){
        $inspections = Inspection::paginate(10);

        return view('inspections.index', ['inspections' => $inspections]);
    }
    
    public function show($id){
        $inspection = Inspection::all()->findOrFail($id);
        return view('inspections.show', ['inspection' => $inspection]);
    }

    public function edit($id)
    {
        $inspection = Inspection::all()->findOrFail($id);
        return view('inspections.edit', compact('inspection'));
    }

    public function create()
    {
        return view('inspections.create');
    }

    public function destroy($id)
    {
        $inspection = Inspection::all()->findOrFail($id);
        $inspection->delete();
        return redirect()->route('inspections.index')->with('success', 'inspection deleted successfully.');
    }
    public function review($id){
        $inspection = Inspection::FindORFail($id);
        return view('inspections.view', compact('inspection'));
    }
    public function reviewed(Request $request, $id){
        $inspection = Inspection::FindORFail($id);
        $validated = $request->validate([
            'decision' => 'required|string|max:255',
            'statement' => 'required|string|max:255',
        ]);
        $validated['is_reviewed'] = 1;
        $inspection->update($validated);
        return redirect()->route('inspection.show', $inspection->$id);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'requested_by' => 'required|string|max:255',
            'start_ts' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'assigned_to' => 'required|string|max:255',
        ]);

        $validated['id'] = \Illuminate\Support\Str::uuid();
        Inspection::create($validated);

        return redirect()->route('inspections.index')->with('success', 'inspections created successfully.');
    }

    public function update(Request $request, $id)
    {
        $inspection = Inspection::all()->findOrFail($id);
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'requested_by' => 'required|string|max:255',
            'start_ts' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'assigned_to' => 'required|string|max:255',
        ]);
        $inspection->update($validated);
        return redirect()->route('inspections.index')->with('success', 'inspection updated successfully.');
    }
}
