@extends('layouts.base')


@section('content')
    <h1>Edit Notebook</h1>
    
    <div class="container">
        <form action="{{ route('notebooks.update', $notebook->id) }}" method="post">
           {{ csrf_field() }}
           {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Notebook Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection