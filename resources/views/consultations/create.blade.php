@extends("adminlte::page")

@section("title", "Cadastro de {$module}")

@section("content_header")
    @include("components.breadcrumb", [
        'module' => $module,
        'url' => $url,
        'level3' => "Cadastro de " . strtolower(substr($module, 0, -1))
    ])
@stop

@section("content")
    <form action="{{ route('consultations.store') }}" method="POST">
        <div class="card">
            <div class="card-header bg-secondary">
                <h5 class="card-title text-white">Novo cadastro de {{strtolower(substr($module, 0, -1))}}</h5>
            </div>
            <div class="card-body">
                @include("consultations._form")
            </div>
            <div class="card-footer border-top">
                <button type="submit" class="btn btn-primary mr-1 px-4">OK</button>
                <a href="#" class="btn btn-danger loading">Voltar</a>
            </div>
        </div>
    </form>
@stop