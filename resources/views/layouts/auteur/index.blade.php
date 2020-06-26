@extends('layouts.app')

@section('title')
    Tous les auteurs
@endsection

@section('links')
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
<link rel="stylesheet" href="{{ asset('css/search-result.css') }}">
@endsection

@section('main')
    @include('layouts.tables-auteur', ['articles'=>$auteurs, 'title'=>$title])
@endsection

@section('scripts')
<script src="{{ asset('js/search-result.js') }}"></script>
@endsection
