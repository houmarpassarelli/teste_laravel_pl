<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConsultationRequest;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    private $module = "Consultas";
    private $url = "consultations";

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Consultation $consultations)
    {
        $results = $consultations::with(['doctor', 'patient'])->latest();

        return view("consultations.index", [
            'module' => $this->module,
            'url' => $this->url,
            'consultations' => $results->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("consultations.create", [
            'module' => $this->module,
            'url' => $this->url
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConsultationRequest $request)
    {   exit("teste");
        // exit(var_dump($request));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
