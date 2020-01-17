@extends('layouts.comic-layout')

@section('content')

  <form action="{{ route('comics.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" name="title" value="">
    </div>
    <div class="form-group">
      <label for="author">author:</label>
      <input type="text" name="author" value="">
    </div>
    <div class="form-group">
      <label for="year">year:</label>
      <input type="text" name="year" value="">
    </div>
    <div class="form-group">
      <label for="review">review:</label>
      <input type="text" name="review" value="">
    </div>
    <div class="form-group">
      <label for="vote">vote:</label>
      <input type="text" name="vote" value="">
    </div>
    <button type="submit">Save</button>
  </form>

@endsection