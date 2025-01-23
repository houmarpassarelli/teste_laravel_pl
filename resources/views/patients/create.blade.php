@extends('adminlte::page')

@section('title', "Cadastro de {$module}")

@section('content_header')
    @include("components.breadcrumb", [
        'module' => $module,
        'url' => $url,
        'level3' => "Cadastro de " . strtolower(substr($module, 0, -1))
    ])
@stop

@section('content')
    <form action="{{ route('patients.store') }}" method="POST">
        <div class="card">
            <div class="card-header bg-secondary">
                <h5 class="card-title text-white">Novo cadastro de {{strtolower(substr($module, 0, -1))}}</h5>
            </div>
            <div class="card-body">
                @include('patients._form')
            </div>
            <div class="card-footer border-top">
                <button type="submit" class="btn btn-primary mr-1 px-4">Cadastrar</button>
                <a href="{{ route('patients.index') }}" class="btn btn-danger loading">Voltar</a>
            </div>
        </div>
    </form>
@stop

@section("js")
    <script>

        $(document).ready(() => {
            $("#cep").mask("00000-000");
            $("#cpf").mask("000.000.000-00", { reverse: true });
            $("#phone").mask("(00) 00000-0000");
        });

        const origin = window.location.origin;
        let url = `${origin}/cep/`;

        document.querySelector("#cep").addEventListener("input", (e) => {

            const value = e.target.value.replace("-", "");

            if(value.length == 8){

                const address = document.querySelector("#address");
                
                url += value;

                fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    if(!data.error){

                        const {public_place, neighborhood, fu, city} = data.data;

                        address.value = `${public_place} ${neighborhood} ${city} ${fu}`;
                    }
                });
            }
        });
    </script>
@stop