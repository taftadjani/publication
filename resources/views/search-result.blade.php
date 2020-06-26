@extends('layouts.app')

@section('title')
    Search result
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
@endsection

@section('main')
    <div class="wrapper">
        @include('layouts.navigation')
        @include('layouts.search-filter')
        @include('layouts.tables', ['articles'=>$articles])
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/navigation.js') }}"></script>
    <script src="{{ asset('js/search-filter.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
@endsection
