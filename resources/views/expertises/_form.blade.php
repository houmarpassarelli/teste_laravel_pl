@csrf

<div class="row">
    <div class="form-group col-12 col-md-4">
        <label for="label" class="form-label">Título</label>
        <input type="text" name="label" id="label" class="form-control @error('label') is-invalid @enderror" value="{{ old('label', $payload->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>