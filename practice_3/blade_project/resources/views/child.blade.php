@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<h3>Welcome from Child Page</h3>

    <p>Hello from Blade!</p>


<ul>
    @foreach(['Laravel', 'Blade', 'Routing'] as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@endsection
