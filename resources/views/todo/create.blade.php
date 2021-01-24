@extends('layouts.app')
@section('content')
    <div class="card mt-5">
        <div class="card-header text-center bg-success text-light">
            <div class="row">
                <div class="col-7 text-right">
                    <h1>Todo Create</h1>
                </div>
                <div class="col-5 text-right">
                    <a class="btn btn-primary h4 text-decoration-none text-light" href="{{ route('todo.home') }}">Back <i class="fas fa-backward"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('todo.store') }}" method="post">
                @csrf
                <div class="col-md-6 form-group">
                    <label for="inputEmail4" class="form-label">Text</label>
                    <input type="text" name="text" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="inputPassword4" class="form-label">Body</label>
                    <input type="text" name="body" class="form-control" >
                </div>
                <div class="col-12 form-group">
                    <label for="inputAddress" class="form-label">Due</label>
                    <input class="form-control" name="due" type="datetime-local" id="example-datetime-local-input">
                </div>
                <div class="col-12 form-group">
                    <button type="submit" class="btn btn-success">Save <i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection