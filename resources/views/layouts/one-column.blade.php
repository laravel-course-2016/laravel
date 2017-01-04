@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('search_panel')
    @include('parts.search_panel')
@endsection

@section('content')
    <div class="container">
        <div class="boxed  push-down-60">
            @section('center-column')
            @show
        </div>
    </div>
@endsection

@section('footer_links')
    @include('parts.footer_links')
@endsection

@section('footer_copyrights')
    @include('parts.footer_copyrights')
@endsection
