@extends('adminlte::page')

@section('title', "Lista de {$module}")

@section('content_header')
    @include("components.breadcrumb", [
        'module' => $module,
        'url' => $url
    ])
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title font-weight-bold">
                Lista de {{ $module }}
            </h5>
            <a href="{{ route('consultations.create', ['module' => $module, 'url' => $url]) }}" class="btn btn-primary float-right">
                Novo Cadastro
            </a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <td>Email</td>
                        <td>Telefone</td>
                        <th>Data e Hora de Cadastro</th>
                        <th>Data de Atualização</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($consultations as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone->phone_number}}</td>
                            <td>{{(new DateTime($item->created_at))->format("d/m/Y H:i")}}</td>
                            <td>{{(new DateTime($item->updated_at))->format("d/m/Y")}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%" class="text-center">Nenhum registro encontrado!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop