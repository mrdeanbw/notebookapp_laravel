@extends('layouts.base')


@section('content')
    <h1>Edit Note</h1>
    
    <div class="container">
        <form action="{{ route('notes.update', $note->id) }}" method="post">
           {{ csrf_field() }}
           {{ method_field('PUT') }}
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="body">Note Body</label>
                <textarea name="body" class="form-control" rows="20"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection