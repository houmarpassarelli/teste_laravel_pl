<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExpertiseRequest;
use App\Models\Expertise;

class ExpertiseController extends Controller
{
    private $module = "Especialidades";
    private $url = "expertises";
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Expertise $expertises)
    {
        $results = $expertises->latest();

        return view('expertises.index', [
            'module' => $this->module,
            'url' => $this->url,
            'expertises' => $results->paginate()->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expertises.create', [
            'module' => $this->module,
            'url' => $this->url
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpertiseRequest $request)
    {
        Expertise::create($request->validated());

        return redirect()->route('expertises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expertise $expertise)
    {
        return view("expertises.show", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $expertise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expertise $expertise)
    {
        return view("patients.edit", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $expertise
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpertiseRequest $request, Expertise $expertise)
    {
        $expertise->update($request->validated());

        return redirect()->route("expertises.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expertise $expertise)
    {
        $expertise->delete();

        return redirect()->route("expertises.index");
    }
}
