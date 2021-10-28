@extends('layouts.app')

@section('content')
 


   
  
 

       <!-- owl-carousel images Start -->
       <section class="pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gen-banner-movies">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true"
                            data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1"
                            data-autoplay="true" data-loop="true" data-margin="30">
                            @foreach ($films as $film)
                            <div class="item">
                                <div class="gen-nav-img">
                                    <img src="{{asset($film->image)}}" style="position: absolute;opacity: 0.3;" alt="streamlab-image">
                                </div>
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>{{ $film->film_name }}</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <ul>
                                                        <li class="gen-sen-rating">
                                                            <span>
                                                                R </span>
                                                        </li>
                                                       
                                                        <li> <img src="images/asset-2.png" alt="streamlab-image">
                                                            <span>
                                                            {{ $film->rate }} </span>
                                                        </li>
                                                      
                                                        <li>
                                                            <a href="action.html"><span>{{ $film->category }}</span></a>
                                                        </li>
                                                    </ul>
                                                    <p>{{Str::limit($film->description, 120)}}</p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="/films/{{ $film->id }}" class="gen-button">
                                                            <span class="text">Play Now</span>
                                                        </a>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- owl-carousel images End -->
   
 <!-- owl-carousel Videos Section-2 Start -->
 <section class="pt-3 gen-section-padding-2 pb-0">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6">
            <h4 class="gen-heading-title">Top Regional Shows</h4>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
            <div class="gen-movie-action">
               <div class="gen-btn-container text-right">
                  <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                     <span class="text">More Videos</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-12">
            <div class="gen-style-2">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                  data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                  data-loop="false" data-margin="30">
                  @foreach ($films as $film)
                  <div class="item">
                     
                     <div
                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset($film->image)}}" style="height: 27vh;" alt="owl-carousel-video-image">
                                 <div class="gen-movie-add">
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                             type="button" class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                             class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu mCustomScrollbar">
                                          <div class="mCustomScrollBox">
                                             <div class="mCSB_container">
                                                <a class="login-link" href="register.html">Sign in to add this movie
                                                   to a
                                                   playlist.</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                               
                                 <div class="gen-movie-info">
                                   
                                    <h3><a href="/films/{{ $film->id }}">{{ $film->film_name }}</a>
                                    </h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>{{ $film->rate }}</li>
                                       <li>
                                          <a href="adventure.html"><span>{{ $film->category }}</span></a>
                                       </li>
                                    </ul>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- owl-carousel Videos Section-2 End -->

   <!-- owl-carousel Videos Section-3 Start -->
   <section class="gen-section-padding-2">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
               <h4 class="gen-heading-title">Watch For Free: Movie Mania</h4>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
               <div class="gen-movie-action">
                  <div class="gen-btn-container text-right">
                     <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                        <span class="text">More Videos</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col-12">
               <div class="gen-style-2">
                  <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                     data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                     data-loop="false" data-margin="30">

                     @foreach ($films as $film)
                     <div class="item">
                        
                        <div
                           class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                           <div class="gen-carousel-movies-style-2 movie-grid style-2">
                              <div class="gen-movie-contain">
                                 <div class="gen-movie-img">
                                    <img src="{{asset($film->image)}}" style="height: 27vh;" alt="owl-carousel-video-images">
                                    <div class="gen-movie-add">
                                       <div class="wpulike wpulike-heart">
                                          <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                type="button" class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                       </div>
                                       <ul class="menu bottomRight">
                                          <li class="share top">
                                             <i class="fa fa-share-alt"></i>
                                             <ul class="submenu">
                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                       <div class="movie-actions--link_add-to-playlist dropdown">
                                          <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                class="fa fa-plus"></i></a>
                                          <div class="dropdown-menu mCustomScrollbar">
                                             <div class="mCustomScrollBox">
                                                <div class="mCSB_container">
                                                   <a class="login-link" href="register.html">Sign in to add this movie
                                                      to a
                                                      playlist.</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="gen-movie-action">
                                       <a href="single-movie.html" class="gen-button">
                                          <i class="fa fa-play"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="gen-info-contain">
                                    
                                    <div class="gen-movie-info">
                                       <h3><a href="/films/{{ $film->id }}">{{ $film->film_name }}</a></h3>
                                    </div>
                                    <div class="gen-movie-meta-holder">
                                       <ul>
                                          <li>{{ $film->rate }}</li>
                                          <li>
                                             <a href="action.html"><span>{{ $film->category }}</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- owl-carousel Videos Section-3 End -->

   <!-- owl-carousel Videos Section-4 Start -->
   <section class="pt-0 gen-section-padding-2">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
               <h4 class="gen-heading-title">All Time Hits</h4>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
               <div class="gen-movie-action">
                  <div class="gen-btn-container text-right">
                     <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                        <span class="text">More Videos</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col-12">
               <div class="gen-style-2">
                  <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="4"
                     data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                     data-loop="false" data-margin="30">
                     @foreach ($films as $film)
                     <div class="item">
                        
                        <div
                           class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                           <div class="gen-carousel-movies-style-2 movie-grid style-2">
                              <div class="gen-movie-contain">
                                 <div class="gen-movie-img">
                                    <img src="{{asset($film->image)}}" style="height: 27vh;" alt="owl-carousel-video-image">
                                    <div class="gen-movie-add">
                                       <div class="wpulike wpulike-heart">
                                          <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                type="button" class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                       </div>
                                       <ul class="menu bottomRight">
                                          <li class="share top">
                                             <i class="fa fa-share-alt"></i>
                                             <ul class="submenu">
                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                       <div class="movie-actions--link_add-to-playlist dropdown">
                                          <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                class="fa fa-plus"></i></a>
                                          <div class="dropdown-menu mCustomScrollbar">
                                             <div class="mCustomScrollBox">
                                                <div class="mCSB_container">
                                                   <a class="login-link" href="register.html">Sign in to add this movie
                                                      to a
                                                      playlist.</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="gen-movie-action">
                                       <a href="single-movie.html" class="gen-button">
                                          <i class="fa fa-play"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="gen-info-contain">
                                    <div class="gen-movie-info">
                                       <h3><a href="/films/{{ $film->id }}">{{ $film->film_name }}</a>
                                       </h3>
                                    </div>
                                    <div class="gen-movie-meta-holder">
                                       <ul>
                                          <li>{{ $film->rate }}</li>
                                          <li>
                                             <a href="action.html"><span>{{ $film->category }}</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                     </div>
                     @endforeach
            
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- owl-carousel Videos Section-4 End -->
 

  

  @include('layouts.footer')
@endsection
