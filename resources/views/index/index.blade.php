@extends('layout')

@section('content')
    @include('index.nav')
    @foreach($sections as $section)
        @include(('index.' . $section->name))
    @endforeach
    @include('index.footer')
    @include('index.loader')
@endsection
