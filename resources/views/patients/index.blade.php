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
            <h5 class="card-title font-weight-bold">Lista de {{ $module }}</h5>
            <a href="{{ route('patients.create') }}" class="btn btn-primary float-right">Novo Cadastro</a>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $item)
                        <tr>
                            <td>
                                <a href="{{ route('patients.show', $item) }}">
                                    {{$item->id}}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('patients.show', $item) }}">
                                    {{$item->name}}
                                </a>
                            </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone->phone_number}}</td>
                            <td>{{(new DateTime($item->created_at))->format("d/m/Y H:i")}}</td>
                            <td>{{(new DateTime($item->updated_at))->format("d/m/Y")}}</td>
                            <td>
                                <a href="{{ route('patients.edit', $item) }}" class="btn btn-warning btn-sm"
                                    data-bs-toggle="tooltip" data-placement="top" title="editar"><i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('patients.destroy', $item) }}" method="POST" @style('display: inline-block') class="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip"
                                        data-placement="top" title="apagar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
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