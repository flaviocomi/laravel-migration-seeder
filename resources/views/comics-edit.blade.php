@extends('layouts.app')

@section('content')

  <form action="{{ route('comics.update', $comic -> id) }}" method="post">    
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $comic -> title }}">
    </div>
    <div class="form-group">
      <label for="author">author:</label>
      <input type="text" name="author" value="{{ $comic -> author }}">
    </div>
    <div class="form-group">
      <label for="year">year:</label>
      <input type="text" name="year" value="{{ $comic -> year }}">
    </div>
    <div class="form-group">
      <label for="review">review:</label>
      <input type="text" name="review" value="{{ $comic -> review }}">
    </div>
    <div class="form-group">
      <label for="vote">vote:</label>
      <input type="text" name="vote" value="{{ $comic -> vote }}">
    </div>
    
    <button type="submit">Save</button>
  
  </form>

@endsection