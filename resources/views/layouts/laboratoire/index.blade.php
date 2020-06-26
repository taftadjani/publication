@extends('layouts.app')

@section('title')
    Tous les laboratoires
@endsection

@section('links')
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
<link rel="stylesheet" href="{{ asset('css/search-result.css') }}">
@endsection

@section('main')
    @include('layouts.tables-laboratoire', ['articles'=>$laboratoires, 'title'=>$title])
@endsection

@section('scripts')
    <script src="{{ asset('js/search-result.js') }}"></script>
@endsection
