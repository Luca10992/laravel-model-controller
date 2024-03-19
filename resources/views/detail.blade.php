@extends('layout.app')
@section('title-name')
    - {{ $movies[$index]->title }}
@endsection

@section('main-content')

<div class="container">
    <h2>{{ $movies[$index]->title }}</h2>
</div>

@endsection