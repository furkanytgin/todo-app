@extends('layouts.app')

@section('titles')
    Create a new ToDo
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
  </ul>
</div><br />
@endif

<form action="{{ route('todos.store') }}" method="post" class="mt-4 p-4">
    @csrf
    
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name">    
    </div>

    <div class="form-group m-3">
        <label for="description">Todo body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
    </div>

    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>

</form>



@endsection