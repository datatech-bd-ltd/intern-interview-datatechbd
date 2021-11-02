@extends('layouts.backend.app')
@section('content')
<form method="POST" action="{{ route('category.update', $category) }}">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
