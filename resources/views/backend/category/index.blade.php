@extends('layouts.backend.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Products</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $category->name }}</td>
        <td>##</td>
        <td>
            <a href="{{ route('category.edit', $category) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('category.destroy', $category) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
