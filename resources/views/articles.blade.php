@extends('layout.app')
@section('body')
    @foreach($liste as $post)
        <h2>
            {{$post}}
        </h2>
    @endforeach
@endsection
