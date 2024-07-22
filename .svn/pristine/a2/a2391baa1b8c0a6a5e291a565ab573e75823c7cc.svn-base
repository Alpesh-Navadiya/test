<!-- <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="{{ url('')}}"><img class="logosvg" src="{{ url('public/assets/loyalwagers_logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav-links ml-auto">
               <li><a href="{{ route('index')}}">Home</a></li>
               <li class="mega-menu dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('wager/fortnite')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wagers
                    </a>
                    <div class="dropdown-menu megamenu-wrapper" aria-labelledby="navbarDropdown">
                        <div class="mw-post">
                          <a href="{{url('wager/fortnite')}}" style="padding-left: 0px;">
                            <div class="mw-post-item">
                                <div class="mw-pic">
                                    <img src="{{ url('public/assets/images/menu1.jpg') }}" alt="">
                                </div>
                                <div class="mw-text">
                                    <h6><a href="javascript:void(0)">Fortnite</a></h6>
                                </div>
                            </div>
                          </a>
                          <a href="{{url('wager/valorant')}}" style="padding-left: 0px;">
                            <div class="mw-post-item">
                                <div class="mw-pic">
                                    <img src="{{ url('public/assets/images/menu2.jpg') }}" alt="">
                                </div>
                                <div class="mw-text">
                                    <h6><a href="javascript:void(0)">Valorant</a></h6>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </li>
               <li><a href="{{ route('faq')}}">FAQ</a></li>
               @auth
               <li><a href="{{ route('userprofile')}}">Profile</a></li>
               @endauth
            </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('index')}}" id="" role="button"
                           data-toggle="" aria-haspopup="true" aria-expanded="false">
                            <div class="flex flex-row ">
                                <div class="">
                                <?php if (auth()->user()->pimage != '') {?>
                        <img class="prospect_pic pros-image"  src="{{url('public/assets/images')}}/<?php echo auth()->user()->pimage; ?>" alt="Profile Picture" width="80px" height="80px" />
                      <?php } else {?>
                        <img class="prospect_pic" id="pros-image" src="{{url('public/assets/images/11.png')}}" alt="Profile Picture" width="80px" height="80px"/>
                      <?php }?>
                                </div>
                                <div class="flex flex-col ml-2 justify-center"><h6 class="font-bold text-base mb-0">
                                {{ auth()->user()->name }}</h6>
                                    <div class="flex flex-row leading-relaxed"><p class="text-black-text opacity-50">
                                        <span class="font-bold uppercase"> $ {{ auth()->user()->user_balance }} Balance</span></p></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">teams</a>
                            <a class="dropdown-item" href="#">Deposit/withdraw</a>
                            <a class="dropdown-item" href="#">History</a>
                        </div>
                    </li>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</header> -->

<nav class="navbar">
         <div class="container custom-width">
            <a href="{{ route('index')}}">
               <div class="navbar__logo navbar__logo--inside">
                    <img width="" src="{{ url('public/assets/loyalwagers_logo.png') }}" alt="" />
               </div>
               </a>
            <ul class="nav-links ml-auto">
               <li><a href="{{ route('index')}}">Home</a></li>
               <li class="mega-menu dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('wager/fortnite')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wagers
                    </a>
                    <div class="dropdown-menu megamenu-wrapper" aria-labelledby="navbarDropdown">
                        <div class="mw-post">
                          <a href="{{url('wager/fortnite')}}" style="padding-left: 0px;">
                            <div class="mw-post-item">
                                <div class="mw-pic">
                                    <img src="{{ url('public/assets/images/menu1.jpg') }}" alt="">
                                </div>
                                <div class="mw-text">
                                    <h6><a href="javascript:void(0)">Fortnite</a></h6>
                                </div>
                            </div>
                          </a>
                          <a href="{{url('wager/valorant')}}" style="padding-left: 0px;">
                            <div class="mw-post-item">
                                <div class="mw-pic">
                                    <img src="{{ url('public/assets/images/menu2.jpg') }}" alt="">
                                </div>
                                <div class="mw-text">
                                    <h6><a href="javascript:void(0)">Valorant</a></h6>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </li>
               <li><a href="{{ route('faq')}}">FAQ</a></li>
               @auth
               <li><a href="{{ route('userprofile')}}">Profile</a></li>
               @endauth
            </ul>
            @guest
            <div class="ml-auto d-flex align-items-center">
               <a href="javascript:void(0)" class="mr-3">
               <button class="button button--outline" data-toggle="modal" data-target="#modalLRForm" onclick="register_modal('login_modal')">Login</button>
               </a>
               <a href="javascript:void(0)">
               <button class="button button--main button--square" data-toggle="modal" data-target="#modalLRForm" onclick="register_modal('register_modal')">Sign Up</button>
               </a>
            </div>
            @else
               <style type="text/css">

                     .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus {
                  background-color: #66615B !important;
              }
              .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus {
                  color: #FFFFFF !important;
                  opacity: 1;
                  text-decoration: none;
              }
               .dropdown-menu .dropdown-item:first-child {
                  border-top-left-radius: 12px;
                  border-top-right-radius: 12px;
              }
              .navbar a.dropdown-item {
                  color: #66615B;
              }
              @media screen and (min-width: 992px){
              .dropdown-menu .dropdown-item {
                  color: inherit;
              }
              .navbar .dropdown-menu a:not(.active) {
                   color: #66615b;
              }
              .dropdown-menu .dropdown-item {
                  color: #66615b;
                  font-size: 14px;
                  padding: 10px 45px 10px 15px;
                  clear: both;
                  white-space: nowrap;
                  width: 100%;
                  display: block;
                  background-color: #FFFFFF;
                  border: 0 none;
                  border-radius: 12px;
                  margin-top: 10px;
                }
              }
              .navbar__logo.navbar__logo--inside {
                margin-top: 8px;
              }
              .navbar .container, .navbar .container-fluid, .navbar .container-lg, .navbar .container-md, .navbar .container-sm, .navbar .container-xl {
                align-items: initial !important;
              }
              .navbar a {
                font-size: 16px !important;
                /*font-family: inherit !important;*/
              }
            </style>
            <div class="ml-auto d-flex align-items-center">
                <div class="collapse navbar-collapse" style="display: block;" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" style="margin-top: 5px;">
                    <li class="nav-item active">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="flex-row">
                                <div class="col-md-6" style="position: absolute;">
                                    <img width="50px" height="50px" src="{{url('public/assets/images')}}/<?php echo auth()->user()->pimage; ?>">
                                </div>
                                <div class="col-md-3  flex-col ml-5 justify-center"><h6 class="font-bold text-base mb-0" style="position: relative;left: 10px">
                                    <?php echo auth()->user()->name; ?></h6>
                                    <div class="col-md-3  flex-row leading-relaxed" ><p class="text-black-text opacity-50">
                                        <span class="font-bold uppercase" style=" color: rgba(0,0,0,.5);position: relative;    right: 7px;">$<?php echo auth()->user()->user_balance; ?> Balance</span></p></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu" style="background-color: #fff;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  aria-selected="false"  id="home-tab" href="#profile">Profile</a>
                                <a class="dropdown-item"  aria-selected="false" id="profile-tab" href="#teams">Teams</a>
                                <a class="dropdown-item"  aria-selected="false" id="contact-tab"  href="#deposit-withdraw" >Deposit/withdraw</a>
                                <a class="dropdown-item" aria-selected="false" id="history-tab"  href="#history" >History</a>

                            <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="javascript:void(0)">Logout</a>
                        </div>
                    </li>
                    </li>
                </ul>
            </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            </form>
          @endguest
      </div>
</nav>
      <nav class="navbar-mobile">
         <div class="container">
            <a href="{{ route('index')}}">
               <div class="navbar-mobile__logo">
                  <img height="24px" src="{{ url('public/assets/loyalwagers_crown.png') }}" alt="">
                  <span class="navbar-mobile-logo__text">Loyal Wagers</span>
               </div>
            </a>
            @guest
            <div class="mr-5 ml-auto d-flex align-items-center">
               <a href="javascript:void(0)">
               <button class="button button--outline button--small mr-3" data-toggle="modal" data-target="#modalLRForm" onclick="register_modal('login_modal')">Login</button>
               </a>
               <a href="javascript:void(0)">
               <button class="button button--main button--small mr-1" data-toggle="modal" data-target="#modalLRForm" onclick="register_modal('register_modal')">Sign Up</button>
               </a>
            </div>
            @endguest
            @auth
            <div class="mr-5 ml-auto d-flex align-items-center">
               <a href="javascript:void(0)" class="mr-3">
               <button class="button button--outline" data-toggle="modal" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</button>
               </a>
               <a href="javascript:void(0)">
               <button class="button button--main button--square" >$<?php echo auth()->user()->user_balance; ?></button>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                </form>
            </div>
            @endauth
            <div class="text-right">
               <div id="hamburger">
                  <div id="hamburger__line-1"></div>
                  <div id="hamburger__line-2"></div>
                  <div id="hamburger__line-3"></div>
               </div>
            </div>
         </div>
         <ul id="navbar-mobile__links">
            <li class="nav-link"><a href="{{ route('index')}}">Home</a></li>
            <li class="nav-link"><a href="{{url('wager/fortnite')}}">Wagers</a></li>
            <li class="nav-link"><a href="{{ route('faq')}}">FAQ</a></li>
            @auth
            <li class="nav-link"><a href="{{ route('userprofile')}}">Profile</a></li>
            @endauth
         </ul>
      </nav>
