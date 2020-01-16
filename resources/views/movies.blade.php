@extends('layouts.app')

@section('content')
    <ol>
        @foreach($movies as $movie)
            <li>
                <ul>
                    <li>{{ $movie->title }}</li>
                    <li>{{ $movie->year }}</li>
                    <li>{{ $movie->overview }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection