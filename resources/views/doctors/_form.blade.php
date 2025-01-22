@csrf

@inject('expertises', 'App\Http\Resources\ExpertiseViewResource')

<div class="row">
    <div class="form-group col-12 col-md-4">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $expertise->label ?? '') }}" autofocus @required(true) />
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="crm" class="form-label">CRM</label>
        <input type="text" name="crm" id="crm" class="form-control @error('crm') is-invalid @enderror" value="{{ old('crm', $expertise->label ?? '') }}" autofocus @required(true) />
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="name" class="form-label">Especialidade</label>
        <select class="form-control" name="expertise_id" @required(true)>
            @forelse ($expertises->getExpertises() as $expertise)
                <option value="{{ $expertise->id }}">
                    {{ $expertise->label }}
                </option>
            @empty
                <option>Nenhuma especialidade cadastrada!</option>
            @endforelse
        </select>
    </div>
</div>