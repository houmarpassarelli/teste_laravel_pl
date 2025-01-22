<?php
    $title = substr($module, 0, -1);
?>

@extends("adminlte::page")

@section("title", "Detalhes de {$title}")

@section('content_header')
    @include("components.breadcrumb", [
        'module' => $module,
        'url' => $url,
        'level3' => "Cadastro de {$title}"
    ])
@stop

@section("content")
    <div class="card">
        <div class="card-header bg-secondary">
            <h5 class="card-title">Detalhes de {{$title}}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Titulo: </strong>{{ $payload->label }}</li>
                        <li class="list-group-item"><strong>Data de Criação: </strong>{{ (new DateTime($payload->created_at))->format("d/m/Y") }}</li>
                        <li class="list-group-item"><strong>Data de Atualização: </strong>{{ (new DateTime($payload->updated_at))->format("d/m/Y") }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card-footer border-top">
            <a href="{{ route('expertises.index') }}" class="btn btn-danger">Voltar</a>
            <a href="{{ route('expertises.edit', $payload->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
@stop