@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')

   
  <form action="{{ route('todos.update', $todo->id) }}" method="post" class="mt-4 p-4">
    @csrf
    @method('PATCH')


    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" value="{{ $todo->name }}" name="name">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Body</label>
        <textarea class="form-control" name="body" rows="3">{{ $todo->body }}</textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Güncelle">
    </div>
</form>

<form method="post" action="{{route('todos.destroy',$todo->id)}}">
    @method('delete')
    @csrf
    <div class="form-group m-3">
        <button type="submit" class="btn btn-danger float-start">Sil</button>
    </div>
</form>

@endsection