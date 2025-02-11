<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;

class DoctorController extends Controller
{
    private $module = "Médicos";
    private $url = "doctors";
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Doctor $doctors)
    {

        $results = $doctors::with("expertise")->latest();

        return view('doctors.index', [
            'module' => $this->module,
            'url' => $this->url,
            'doctors' => $results->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("doctors.create", [
            'module' => $this->module,
            'url' => $this->url
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        Doctor::create($request->validated());

        return redirect()->route("doctors.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        $payload = $doctor::with("expertise")->first();

        return view("doctors.show", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $payload
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $payload = $doctor::with("expertise")->first();

        return view("doctors.edit", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $payload
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $doctor->update($request->validated());

        return redirect()->route("doctors.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route("doctors.index");
    }
}
