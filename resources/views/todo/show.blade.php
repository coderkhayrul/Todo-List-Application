@extends('layouts.app')
@section('content')
    <div class="container mt-5 d-flex h-100 text-center text-light bg-dark mb-5">
        <main class="px-3">
            <h1>{{ $todo->text }}</h1>
            <p class="lead">{{ $todo->body }}</p>
            <p class="lead">
                <a href="" class="btn btn-lg btn-success fw-bold border-dark text-white">{{ $todo->due }}</a>
            </p>
            <a href="{{ route('todo.home') }}" class="btn btn-sm btn-success border-dark text-white mb-2">back</a>
        </main>
    </div>
@endsection