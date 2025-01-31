@extends('layouts.frontLayout.front_design')
@section('title','Home')
@section('content')

  <section class="hero hero--home">
            <div class="hero__overlay"></div>
            <div class="hero__bottom-shadow">
               <img src="{{ url('public/assets/images/fortnite02.png') }}" alt="" class="hero__foreground-img">
            </div>
            <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="home-conetnt wow" style="animation-delay: 0.3s; animation-duration: 1.5s; animation-name: fadeInUp;">
                      <h1>Place Wagers and <br>Play for<span class="c-brand-light">
                        Real Money</span></h1>
                      <p>
                      Use our easy matchmaking system to instantly play against players around the world on Xbox, PS4 or PC.
                      </p>
                      <button class="button button--main">
                        <span>Sign up to start</span>
                      </button>

                    </div>
                </div>
                
            </div>
  </section>

  <section id="benefits">
            <div class="container custom-width">
               <div class="row">
                  <div class="col col-12 col-sm-4 mb-4">
                     <div class="card benefits__card wow" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4" src="{{ url('/public/patterns/privacy.svg') }}" alt="">
                        <h2>Play securely</h2>
                        <p>
                           Our payment process ensures the best player always wins.
                        </p>
                     </div>
                  </div>
                  <div class="col col-12 col-sm-4 mb-4">
                     <div class="card benefits__card wow" style="animation-delay: 0.4s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4" src="{{ url('/public/patterns/diamond.svg') }}" alt="">
                        <h2>Play For Real $</h2>
                        <p>
                           Deposit money, place wagers, play and win real money.
                        </p>
                     </div>
                  </div>
                  <div class="col col-12 col-sm-4 mb-4">
                     <div class="card benefits__card wow" style="animation-delay: 0.6s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4" src="{{ url('/public/patterns/helpdesk.svg') }}" alt="">
                        <h2>24/7 Support</h2>
                        <p>
                           Our admins are always available to resolve isusses.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
  </section>

  <section id="benefits1">
            <div class="container custom-width">
               <h2 class="text-center">How it <span class="c-brand-light">Works</span></h2>

               <div class="row">
                  <div class="col col-12 col-sm-3 mb-3">
                     <div class="card benefits__card1 wow1" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4 marginleft" src="{{ url('public/assets/Game/final_play (2).png') }}" width="100px"  alt="">
                        <h2>Join</h2>
                        <p>
                           Join or Create Match
                        </p>
                     </div>
                  </div>
                  <div class="col col-12 col-sm-3 mb-3">
                     <div class="card benefits__card1 wow" style="animation-delay: 0.4s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4 marginleft" src="./assets/Game/final_opponent (2).png"   width="100px" alt="">
                        <h2>Add Oponent</h2>
                        <p>
                           Talk To Your Opponent and Add Your Opponent
                        </p>
                     </div>
                  </div>
                  <div class="col col-12 col-sm-3 mb-3">
                     <div class="card benefits__card1 wow" style="animation-delay: 0.6s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4 marginleft" src="{{ url('public/assets/Game/final_play (2).png') }}" width="100px"  alt="">
                        <h2>Play</h2>
                        <p>
                           Play Against Your Opponent.
                        </p>
                     </div>
                  </div>
                  <div class="col col-12 col-sm-3 mb-3">
                     <div class="card benefits__card1 wow" style="animation-delay: 0.6s; animation-duration: 1.5s; animation-name: fadeInLeft;">
                        <img class="mb-4 marginleft" src="{{ url('public/assets/Game/final_winner (2).png') }}" width="100px"   alt="">
                        <h2>Winner</h2>
                        <p>
                           Get Money Staright To Your Paypal.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
  </section>

  <section id="how-it-works">
            <style type="text/css">
            .main-timeline .timeline-content {
              width: 100%;
            }
            </style>
            <h2 class="text-center" >How it <span class="c-brand-light">Works</span></h2>
            <div class="container custom-width">
               <div class="row">
                  <div class="col">
                     <div class="main-timeline">
                        <div class="timeline">
                           <a href="#" class="timeline-content wow" style="animation-delay: 0.2s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInLeft;">
                              <span class="timeline-year"><img class="timeline-image" src="{{ url('public/assets/Game/final_join (2).png') }}" width="100px" height="100px"></span>
                              <div class="content">
                                 <h3 class="title">Join</h3>
                                 <p class="description">
                                    Join Or Create Match.
                                    
                                 </p>
                              </div>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content wow" style="animation-delay: 0.3s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
                              <span class="timeline-year"><img class="timeline-image" src="{{ url('public/assets/Game/final_opponent (2).png') }}" width="100px" height="100px"></span>
                              
                              <div class="content">
                                 <h3 class="title">Add Opponent</h3>
                                 <p class="description">
                                    Talk To Your Opponent and Add Your Opponent
                                 </p>
                              </div>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInLeft;">
                              <span class="timeline-year"><img class="timeline-image" src="{{ url('public/assets/Game/final_play (2).png') }}" width="100px" height="100px"></span>
                              
                              <div class="content">
                                 <h3 class="title">Play</h3>
                                 <p class="description">
                                    Play Against Your Opponent.
                                 </p>
                              </div>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
                              <span class="timeline-year"><img class="timeline-image" src="{{ url('public/assets/Game/final_winner (2).png') }}" width="100px" height="100px"></span>
                              <div class="content">
                                 <h3 class="title">Winner</h3>
                                 <p class="description">
                                    Get Money Staright To Your Paypal.
                                 </p>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
  </section>

@endsection
