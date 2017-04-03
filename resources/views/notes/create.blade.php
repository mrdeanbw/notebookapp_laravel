@extends('layouts.base')


@section('content')
    <h1>Create Note</h1>
    
    @if(count($errors) > 0)
        <ul>
           @foreach($errors as $error)
               <li class="alert alert-danger">{{ $error }}</li>
           @endforeach
        </ul>
    @endif
    <div class="container">
        <form action="{{ route('notes.store') }}" method="post">
           {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="body">Note Body</label>
                <textarea name="body" class="form-control" rows="20"></textarea>
            </div>
            <input type="hidden" name="notebook_id" value="{{ $id }}">
            <input type="submit" class="btn btn-primary" value="Done">
        </form>
    </div>
@endsection