@extends('layouts.backend.app')
@section('content')
<form method="POST" action="{{ route('category.store') }}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
      {{-- old name --}}
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
