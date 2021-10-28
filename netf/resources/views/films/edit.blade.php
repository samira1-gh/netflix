@extends('layouts.app')

@section('content')
<form action="/dashboard/{{ $film->id }}" enctype="multipart/form-data" method="POST" class="container py-5 mx-5">
     @csrf
    @method('PUT')
    <div class="form-group">
        <label for="campaign-name">
            Campaign Name
        </label>
       <input type="text" class="form-control" name="film_name" value="{{ $film->film_name }}" >
    </div>
    <div class="form-group">
        <label for="campaign-purpose">
      Description
        </label>
    <textarea name="description" class="form-control" id="" cols="30" rows="10">
      {{ $film->description }}
    </textarea>
    </div>
    <div class="form-group">
                <label>category</label>
                <select class="form-control" name="category" id="">
                <option value="{{ $film->category }}">{{ $film->category }}</option>
                    @foreach ($categories as $category)
                  <option value="{{$category->name}}">{{$category->name}}</option>
                   @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Rating</label>
                <select class="form-control" name="city" id="">
                <option value="{{ $film->city }}">{{ $film->rate }}</option>
                    @foreach ($ratings as $rating)
                  <option value="{{$rating->rate}}">{{$rating->rate}}</option>
                   @endforeach
                </select>
              </div>
    <div class="form-group">
                  <label>Image</label>
                  <input type="file"  class="form-control" name="image" >     
               </div>

    <div class="form-group">
        <label for="goal-amount">
            Duration
        </label>
        <input 
        type="text" 
        name="duration" 
        value="{{ $film->duration }}"
        class="form-control">

    </textarea>
    </div>

     <div class="form-group">
        <input 
        type="submit" 
        class="btn orange-btn"
        id=""
        value="Update">

    </textarea>
    </div>
 </form>

 @include('layouts.footer')
 @endsection