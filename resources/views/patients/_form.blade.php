@csrf

<div class="row">
    <div class="form-group col-12 col-md-4">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-2">
        <label for="phone" class="form-label">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="form-group col-12 col-md-4">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" name="cep" id="cep" class="form-control @error('cep') is-invalid @enderror" value="{{ old('cep', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-6 col-md-6">
        <label for="address" class="form-label">Endereço</label>
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group col-6 col-md-2">
        <label for="address_number" class="form-label">Número</label>
        <input type="text" name="address_number" id="address_number" class="form-control @error('address_number') is-invalid @enderror" value="{{ old('address_number', $expertise->label ?? '') }}" autofocus @required(true) />
        @error('label')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>