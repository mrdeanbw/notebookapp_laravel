@extends('layouts.base')


@section('content')
    <h1>Create Notebook</h1>
    
    <div class="container">
        <form action="{{ route('notebooks.store') }}" method="post">
           {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Notebook Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <input type="submit" class="btn btn-primary" value="Done">
        </form>
    </div>
@endsection