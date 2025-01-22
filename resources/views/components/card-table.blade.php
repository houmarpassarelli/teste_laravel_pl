<div class="card">
    <div class="card-header">
        <h5 class="card-title font-weight-bold">{{ $title }}</h5>
        <a href="{{ $create }}" class="btn btn-primary float-right">Novo Cadastro</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{$item}}</td>
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