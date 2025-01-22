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
                        <li class="list-group-item"><strong>Nome: </strong>{{ $payload->name }}</li>
                        <li class="list-group-item"><strong>CPF: </strong>{{ $payload->cpf }}</li>
                        <li class="list-group-item"><strong>Email: </strong>{{ $payload->email }}</li>
                        <li class="list-group-item"><strong>Telefone: </strong>{{ $payload->phone->phone_number }}</li>
                        <li class="list-group-item"><strong>Endereço: </strong>{{ $payload->address }}</li>
                        <li class="list-group-item"><strong>Número Endereço: </strong>{{ $payload->address_number }}</li>
                        <li class="list-group-item"><strong>Data de Criação: </strong>{{ (new DateTime($payload->created_at))->format("d/m/Y") }}</li>
                        <li class="list-group-item"><strong>Data de Atualização: </strong>{{ (new DateTime($payload->updated_at))->format("d/m/Y") }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card-footer border-top">
            <a href="{{ route('patients.index') }}" class="btn btn-danger">Voltar</a>
            <a href="{{ route('patients.edit', $payload->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
@stop