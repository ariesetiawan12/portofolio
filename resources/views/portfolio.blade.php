
@extends('layouts.app')

@section('title', 'Portfolio Arie Setiawan')

@section('content')

    @include('components.home')

    @include('components.about')

    {{-- Section Foto Penyemangat --}}
    @include('components.motivation')

    @include('components.skills')

    @include('components.projects')

    @include('components.contact')

@endsection
