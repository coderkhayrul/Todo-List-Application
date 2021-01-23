@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Text</th>
            <th scope="col">Body</th>
            <th scope="col">Due</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)
        <tr>
            <th scope="row">{{ $todo->id }}</th>
            <td>{{ $todo->text }}</td>
            <td>{{ $todo->body }}</td>
            <td>{{ $todo->due }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection