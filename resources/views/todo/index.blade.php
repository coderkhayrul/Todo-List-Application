@extends('layouts.app')
@section('content')
   <div class="card mt-5">
       <div class="card-header text-center bg-success">
           <div class="row">
               <div class="col-7 text-right">
                   <a class=" h1 text-decoration-none text-light" href="{{ route('todo.home') }}">Todos List</a>
               </div>
               <div class="col-5 text-right">
                   <a class="btn btn-primary h4 text-decoration-none text-light" href="{{ route('todo.create') }}">Todo Add <i class="fas fa-calendar-plus"></i></a>
               </div>
           </div>
       </div>
       <div class="card-body">
           @if(count($todos) > 0)
               <table class="table table-hover">
                   <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Text</th>
                       <th scope="col">Body</th>
                       <th scope="col">Due</th>
                       <th scope="col">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($todos as $todo)
                       <tr>
                           <th scope="row">{{ $todo->id }}</th>
                           <td>{{ $todo->text }}</td>
                           <td>{{ $todo->body }}</td>
                           <td>{{ $todo->due }}</td>
                           <td>
                               <a href="{{ route('todo.show',$todo->id) }}" class="btn btn-info btn-sm text-light"><i class="fas fa-eye"></i></a>
                               <a href="#" class="btn btn-primary btn-sm mt-2"><i class="fas fa-edit"></i></a>
                               <form class="mt-2" method="post" action="{{ route('todo.destroy',$todo->id) }}">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-backspace"></i></button>
                               </form>
                           </td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           @endif
       </div>
   </div>
@endsection