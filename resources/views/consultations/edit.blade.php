@extends("adminlte::page")

@section("title", "Edição de {$module}")

@section("content_header")
    @include("components.breadcrumb", [
        'module' => $module,
        'url' => $url,
        'level3' => "Edição de " . strtolower(substr($module, 0, -1))
    ])
@stop

@section("content")
    <form action="{{ route('consultations.update', $payload) }}" method="POST">
        @method('PUT')
        <div class="card">
            <div class="card-header bg-success">
                <h5 class="card-title text-white">Editar {{ strtolower(substr($module, 0, -1)) }}</h5>
            </div>
            <div class="card-body">
                @include('consultations._form', ['type' => 'edit'])
            </div>
            <div class="card-footer border-top">
                <button type="submit" class="btn btn-success mr-1 px-4">Editar</button>
                <a href="{{ route('consultations.index') }}" class="btn btn-danger loading">Voltar</a>
            </div>
        </div>
    </form>
@stop