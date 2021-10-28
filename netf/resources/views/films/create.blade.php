@extends('layouts.app')

@section('content')
 <form action="/films"  enctype="multipart/form-data" method="POST" class="container my-5 py-5">
    @csrf
    <div class="form-group">
        <label for="name">
            Film Name
        </label>
       <input type="text" class="form-control" name="name" id="" placeholder="Enter A name for film">
    </div>
    <div class="form-group">
        <label for="purpose">
            Description
        </label>
    <textarea name="purpose" class="form-control" id="" cols="30" rows="10" placeholder="Enter the Purpose of This Campaign">

    </textarea>
    </div>
    <div class="form-group">
                <label>category</label>
                <select class="form-control" name="category" id="">
                    @foreach ($categories as $category)
                  <option value="{{$category->name}}">{{$category->name}}</option>
                   @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Rating</label>
                <select class="form-control" name="rating" id="">
                    @foreach ($ratings as $rating)
                  <option value="{{$rating->rate}}">{{$rating->rate}}</option>
                   @endforeach
                </select>
              </div>

    <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" >     
               </div>

    <div class="form-group">
        <label for="goal-amount">
        Duration
        </label>
        <input 
        type="text" 
        name="duration" 
        placeholder="Enter A Duration"
        class="form-control">

    </textarea>
    </div>

     <div class="form-group my-5">
        <input 
        type="submit" 
        class="btn orange-btn my-5"
        name="goal-amount" 
        id=""
        value="Create">

    </textarea>
    </div>
 </form>

 @include('layouts.footer')
@endsection