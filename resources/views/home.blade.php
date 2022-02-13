@extends('layouts.app')

@section('page_title')
Model Controller
@endsection

@section('main_content')

    @include('components.movies-list', $movies)

@endsection