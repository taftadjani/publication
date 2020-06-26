@extends('layouts.app')

@section('title')
    Tous les articles
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-result.css') }}">
@endsection

@section('main')
    @include('layouts.tables', ['articles'=>$articles, 'title'=>$title])
@endsection

@section('scripts')
    <script src="{{ asset('js/tables.js') }}"></script>
    <script src="{{ asset('js/search-result.js') }}"></script>
@endsection
