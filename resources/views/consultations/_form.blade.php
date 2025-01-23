@csrf

@inject('doctors', 'App\Http\Resources\DoctorViewResource')
@inject('patients', 'App\Http\Resources\PatientViewResource')

<div class="row">
    <div class="form-group col-12 col-md-4">
        <label for="consultation_date" class="form-label">Data e Hora da Consulta</label>
        <input type="datetime-local" name="consultation_date" id="consultation_date" class="form-control @error('consultation_date') is-invalid @enderror" value="{{ old('consultation_date', $payload->consultation_date ?? '') }}" autofocus @required(true) />
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="patient_id" class="form-label">Paciente</label>
        <select class="form-control" name="patient_id" id="patient_id" @required(true)>
            @forelse ($patients->getPatients() as $patient)
                <option value="{{ $patient->id }}" {{ old('patient_id', $payload->patient_id ?? '') == $patient->id ? 'selected' : '' }}>
                    {{ $patient->name }}
                </option>
            @empty
                <option>Nenhum paciente cadastrado!</option>
            @endforelse
        </select>
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="doctor_id" class="form-label">Médico</label>
        <select class="form-control" name="doctor_id" id="doctor_id" @required(true)>
            @forelse ($doctors->getDoctors() as $doctor)
                <option value="{{ $doctor->id }}" {{ old('doctor_id', $payload->doctor_id ?? '') == $doctor->id ? 'selected' : '' }}>
                    {{ $doctor->name }}
                </option>
            @empty
                <option>Nenhum médico cadastrado!</option>
            @endforelse
        </select>
    </div>
</div>