@extends('layouts.app')

@section('content')
  <div class="container mt-5 pt-5">
    
      <a href="{{ url('films/create') }}" class="btn gen-button my-3">Create A Film</a>
     <table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center text-white">
        <th>ID</th>
        <th>Film Name</th>
        <th class="display">Description</th>
        <th class="display tablet">Category</th>
        <th class="display tablet">Rate</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($films  as  $film)
         <tr class="text-center text-white">
            <td>{{ $film->id }}</td>
            <td>{{ $film->film_name }}</td>
            <td class="display">{{ $film->description }}</td>
            <td class="display tablet">{{ $film->category }}</td>
            <td class="display tablet">{{ $film->rate }}</td>
            <td class="d-flex justify-content-around">
                <a href="/films/{{ $film->id }}" target="_blank" class="btn btn-success px-4">Preview</a>
                <a href="/dashboard/{{ $film->id }}/edit" class="btn btn-warning px-4">Edit</a>
                <form action="/dashboard/{{ $film->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger px-4">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
     
    </tbody>
  </table>
  </div>
  @include('layouts.footer')
@endsection
