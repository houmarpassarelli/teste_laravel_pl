<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route($url . '.index') }}">Lista de {{ $module }}</a>
        </li>
        @isset($level3)
            <li class="breadcrumb-item active">{{ $level3 }}</li>
        @endisset
    </ol>
</nav>