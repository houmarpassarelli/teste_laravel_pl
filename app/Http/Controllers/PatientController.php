<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Phone;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{
    private $module = "Pacientes";
    private $url = "patients";
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Patient $patients)
    {

        $results = $patients::with("phone")->latest();

        return view("patients.index", [
            'module' => $this->module,
            'url' => $this->url,
            'patients' => $results->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("patients.create", [
            'module' => $this->module,
            'url' => $this->url
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        $phone = new Phone();
        $phone->phone_number = $request->input('phone');

        $patient = Patient::create($request->validated());

        $phone->patient_id = $patient->id;

        $phone->save();

        return redirect()->route("patients.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $payload = $patient::with("phone")->first();

        return view("patients.show", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $payload
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        $payload = $patient::with("phone")->first();

        return view("patients.edit", [
            'module' => $this->module,
            'url' => $this->url,
            'payload' => $payload
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->validated());

        return redirect()->route("patients.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {

        $destroy = $patient::with("phone")->first();
        $destroy->phone->delete();
        $destroy->delete();

        return redirect()->route("patients.index");
    }
}
