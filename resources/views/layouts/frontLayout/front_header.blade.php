<div class="pageloader"></div></div>
<style type="text/css">
.pageloader{
    position: fixed;
    left: 0px;
    top: auto;
    width: 100%;
    height: 100%;
    background-color: #fff;
    z-index: 999999;
    background: url('{{ url('public/assets/images/loader.gif')  }}') 50% 50% no-repeat rgb(255, 255, 255);
  }

</style>
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
               <!-- <li><a href="{{ route('userprofile')}}">Profile</a></li> -->
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
                  font-size: 14px !important;
                  padding: 10px 45px 10px 15px;
                  clear: both;
                  white-space: nowrap;
                  width: 100%;
                  display: block;
                  background-color: #FFFFFF;
                  border: 0 none;
                  border-radius: 12px !important;
                  margin-top: 10px;
              }
              }
              @media screen and (min-width: 768px){
              .navbar-nav .dropdown-item.show .dropdown-menu, .dropdown.show .dropdown-menu, .dropdown-btn.show .dropdown-menu {
                  transform: translate3d(0px, 0px, 0px);
                  visibility: visible !important;
                  padding: 15px 10px;
              }
              }

              }
              #notification_data{
                left: auto !important;
                right: 0px !important;
              }
              .notificationTitle{
                  color:rgb(113, 198, 255);
                  border-bottom:1px solid rgb(113, 198, 255);
                  padding-bottom:5px;
                  margin-bottom:10px;
              }
              .notificationsBody{
                    position:relative;
                    margin-top:15px;
                    border-bottom:1px solid #dddddd;
                    min-height: 100px;
                    height: auto;
              }
              .notificationsBody .title{
                font-size:16px;
                margin-bottom: 0.5px;
                font-weight: initial !important;
              }
              .notificationsBody .info{
                font-size:14px;
                margin-bottom: 0.5px;
                height:auto;
                font-weight: initial !important;
              }
              .notificationsBody .details .date{
                font-size:12px;
                float:right;
                font-weight: initial !important;
              }
              .notificationsBody .details .link{
                font-size:12px !important;
                padding: 0px !important;
                float:left;
                font-weight: initial !important;
              }
              .notificationsBody .details{
                  position:absolute;
                  /* bottom:0px; */
                  width: 100%;
              }
              .notificationsBody .details .link:hover{
                  font-style:bold;
              }
              .notifications{
                max-height: 200px;
                overflow: auto;
              }
              .button__badge{
                position: absolute;
                top: 0px;
                right: 0%;
                background: red;
                padding: 0px 5px 0px 5px;
                border-radius: 12px;
                font-size: 11px;
                color:#fff;
              }
            </style>
            <div class="ml-auto d-flex align-items-center">
                <div class="collapse navbar-collapse" style="display: block;" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active"> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="flex flex-row ">
                                    <div class="" style="position: absolute;">
                                        <img width="50px" height="50px" id="header_user_img" src="{{url('public/assets/images')}}/<?php echo auth()->user()->pimage; ?>">
                                    </div>
                                    <div class="flex flex-col ml-5 justify-center"><h6 class="font-bold text-base mb-0">
                                        <?php echo auth()->user()->name; ?></h6>
                                        <div class="flex flex-row leading-relaxed"><p class="text-black-text opacity-50">
                                            <span class="font-bold uppercase" style="color: rgba(0,0,0,.5);">$<?php echo auth()->user()->user_balance; ?> Balance</span></p></div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu" style="background-color: #fff;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('userprofile')}}#home">Profile</a>
                                <a class="dropdown-item" href="{{ route('userprofile')}}#profile">Teams</a>
                                <a class="dropdown-item" href="{{ route('userprofile')}}#contact">Deposit/withdraw</a>
                                <a class="dropdown-item" href="{{ route('userprofile')}}#history">History</a>
                                <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="javascript:void(0)">Logout</a>
                            </div>
                        </li>

                    <!-- </li> -->
                    </ul>
                </div>
                <ul class="navbar-nav" style="margin: 0 20px;">
                    <li class="nav-item dropdown" id="noti">
                        <a class="nav-link" href="#" id="noti_Container" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bell" style="color:rgb(113, 198, 255);font-size:25px" aria-hidden="true"></i>
                           <span class="button__badge">2</span>
                        </a>
                        <div class="dropdown-menu noti_Container" id="notification_data" style="background-color: #fff;
    left: auto;
    min-width: 280px;
    width:280px;
    right: 0;" aria-labelledby="noti_Container">
                        <div id="notificationTitle" class="notificationTitle">Notifications </div>
                            <div class="notifications">
                                <!-- <div class="notificationsBody">
                                    <p class="title">Admin Added</p>
                                    <p class="info">Admin Added into Your Account Admin Added into Your Account Admin Added into Your Account</p>
                                    <div class="details">
                                        <a  class="link" href="#" >View Details</a>
                                        <p  class="date">22-08-2020</p>
                                    </div>
                                </div>
                                <div class="notificationsBody">
                                    <p class="title">Admin Added</p>
                                    <p class="info">Admin Added into Your Account Admin Added into Your Account Admin Added into Your Account</p>
                                    <div class="details">
                                        <a  class="link" href="#" >View Details</a>
                                        <p  class="date">22-08-2020</p>
                                    </div>
                                </div>
                                <div class="notificationsBody">
                                    <p class="title">Admin Added</p>
                                    <p class="info">Admin Added into Your Account Admin Added into Your Account Admin Added into Your Account</p>
                                    <div class="details">
                                        <a  class="link" href="#" >View Details</a>
                                        <p  class="date">22-08-2020</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                </form>
               <!-- <a href="javascript:void(0)" class="mr-3">
               <button class="button button--outline" data-toggle="modal" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</button>
               </a>
               <a href="javascript:void(0)">
               <button class="button button--main button--square" >$<?php echo auth()->user()->user_balance; ?></button>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                </form> -->
            </div>
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
