@extends('layouts.app')

@section('content')
 <div class="campaign-details my-5">
     <div class="campaign-details-inner">
                <h1 class="pb-3">{{ $campaign->campaign_name }}</h1>
                <div class="campaign-img">
                <img class="card-image" src="{{asset($campaign->image)}}" alt="">
                </div>
            <div class="campaign-info">
                <div class="campaign-progress">
                     
                    <div class=" ">
                        <h2> </h2>
                        <progress class="progress-bar-inner" id="file" max="{{ $campaign->goal_amount }}" value="{{$campaign->donation_sum_amount_donated}}"> 70% </progress>
                    </div>
                </div>
                <div class="campaign-buttons">
                    
                        <a href="/campaign/{{ $campaign->id }}/donate" class="button orange-btn text-center">Donate Now</a>
                
                     
                </div>
            </div>
            <p class="pt-3">{{ Str::limit($campaign->campaign_purpose, 2000, '...') }}  <a href="" class="orange-text">Read more</a></p>
            <h3>Organizer</h3>
          
            <hr>
            <div class="organizer">
                {{-- <p class="">{{ Auth::user()->name }}</p> --}}
            </div>
     </div>
     

 </div>

 @include('layouts.footer')
 
@endsection