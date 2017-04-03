@extends('layouts.base')


@section('content')
    <div class="container">
        <div class="row">
            <h1 class="dislay-3">
                {{ $note->title }}
            </h1>
            <p>{{ $note->body }}</p>
        </div>
    </div>
@endsection