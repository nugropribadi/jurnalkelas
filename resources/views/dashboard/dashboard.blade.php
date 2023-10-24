@extends('layouts.app')
@section('main')
    <div class="card">
        <div class="card-body">
            @if (auth()->user()->role === 'PJ')
                @foreach ($rombel_name as $name)
                    <h5 class="card-title fw-semibold mb-4">Selamat Datang {{ $name->name }}</h5>
                @endforeach
            @else
                <h5 class="card-title fw-semibold mb-4">Selamat Datang Admin</h5>
            @endif
        </div>
    </div>
@endsection
