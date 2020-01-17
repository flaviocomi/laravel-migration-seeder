@extends('layouts.comic-layout')

@section('content')

  <ol>
    @foreach($comics as $comic)
        <li>
            <ul>
                <li><a href=" {{ route('comics.show', $comic -> id) }}">{{ $comic -> title }}</a></li>
                <li>{{ $comic->author }}</li>
                <li>{{ $comic->year }}</li>
                <li>{{ $comic->review }}</li>
                <li>{{ $comic->vote }}</li>
                <li><a href="{{ route('comics.edit', $comic -> id) }}">EDIT</a></li>
                <li>
                  <form action="{{ route('comics.destroy', $comic -> id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete">DELETE</button>
                  </form>
                  {{-- <a href="{{ route('comics.destroy', $comic -> id) }}">DELETE</a> --}}
                </li>
            </ul>
        </li>
        <br>
    @endforeach
  </ol>

  <a href="{{ route('comics.create') }}">CREATE</a>

@endsection