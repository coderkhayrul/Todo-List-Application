@extends('layouts.app')
@section('content')
    <div class="card mt-5">
        @if(Session::has('success'))
            <p class="alert alert-success"><i class="fas fa-check-circle"></i> {{ Session::get('success') }}</p>
        @endif
        <div class="card-header text-center bg-success text-light">
            <div class="row">
                <div class="col-7 text-right">
                    <h1>Todo Edit</h1>
                </div>
                <div class="col-5 text-right">
                    <a class="btn btn-primary h4 text-decoration-none text-light" href="{{ route('todo.home') }}">Back <i class="fas fa-backward"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('todo.update', $todo->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6 form-group">
                    <label for="inputEmail4" class="form-label">Text</label>
                    <input type="text" value="{{ $todo->text }}" name="text" class="form-control  @error('text') is-invalid @enderror">
                    @error('text') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="inputPassword4" class="form-label">Body</label>
                    <input type="text" value="{{ $todo->body }}" name="body" class="form-control  @error('body') is-invalid @enderror" >
                    @error('body') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>
                <div class="col-12 form-group">

                    <input value="{{ $todo->due }}" class="form-control" type="text" disabled>
                </div>

                <div class="col-12 form-group">
                    <label for="inputAddress" class="form-label">Due</label>
                    <input value="{{ old('due') }}" class="form-control  @error('due') is-invalid @enderror" name="due" type="datetime-local" id="example-datetime-local-input">
                    @error('due') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                </div>
                <div class="col-12 form-group">
                    <button type="submit" class="btn btn-success">Save <i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection