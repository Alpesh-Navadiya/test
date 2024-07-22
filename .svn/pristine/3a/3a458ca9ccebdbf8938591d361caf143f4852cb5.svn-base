@extends('layouts.frontLayout.front_design')
@section('title','Login')
@section('content')
<style>.ajs-error{ color: white; }</style>
<section id="login" class="top-section">
    <div class="container">
        <div class="row">
        <div class="col col-12 col-md-6 d-none d-md-flex flex-column h-100 w-100">
                <img class="login__crown" src="{{ url('public/assets/images/login_crown.png')}}" alt="">
                <div class="d-flex social-icons">
                    <a href="https://www.instagram.com/loyalwagers/" target="__blank" rel="noopener noreferrer"><img height="30px" src="{{ url('public/assets/icons/IG_icon_purple.svg')}}" alt="img"></a>
                    <a href="https://twitter.com/loyalwagers" target="__blank" rel="noopener noreferrer"><img height="30px" src="{{ url('public/assets/icons/twitter_purple.svg')}}" alt="img"></a>
                    <a href="https://www.youtube.com/channel/UCeleoadttX5jRQyzGqvSEHQ" target="__blank" rel="noopener noreferrer"><img height="30px" src="{{ url('public/assets/icons/youtube_purple.svg')}}" alt="img"></a>
                    <a href="https://discord.gg/crm4Fzb" target="__blank" rel="noopener noreferrer"><img height="30px" src="{{ url('public/assets/icons/discord_purple.svg')}}" alt="img"></a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-once="true" class="col col-12 col-md-6 d-flex text-center">
                <form action="{{ url('userlogin1')}}" method="POST" class="login__form" id="loginUser">
                    <h1>Log In</h1>
                    <p class="mb-3">Want to join? <a href="{{ route('registration')}}">Register for free!</a></p>
                    <label class="text-left" for="email">Email
                        <br>
                        <input  type="email" name="email" id="email" placeholder="Enter your email" />
                    </label>
                    <br>
                    <label class="text-left" for="password">Password
                        <br>
                        <input type="password" name="password" id="password" placeholder="Enter your password" />
                    </label>
                    <br>
                   <input type="submit" type="submit" value="LOGIN" class="button--main button--square mt-2 button button--form"/>
                    <div class="d-flex align-items-center mt-3">
                        <input class="mr-2" type="checkbox">
                        Remember me
                    </div>
                    <div class="d-flex align-items-center mt-3">
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ url('public/js/jquery.validate.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<script type="text/javascript">
$(document).ready(function () {
    $("#loginUser").validate({
        rules: {
            password: {
                required: true
            },
            email: {
                required: true,
                email:true,
            }
        },
        messages: {          
        },
         submitHandler:function(form){

                var formurl = $(form).attr('action');
                $.ajax({
                    url: formurl , 
                    type: "POST",             
                    data: new FormData(form),
                    cache: false,             
                    processData: false,
                    contentType: false,      
                    success: function(data) {
                            	if(data == 'true'){
                    		window.location.href="{{ url('wager') }}";
                    	}
                    	else{
                            alertify.set('notifier','delay', 3);
                            alertify.set('notifier','position', 'top-right');
                            alertify.error('Something went Wrong ! ' );
                    	}
                    },
                    error:function(xhr){
                        
                     }
                });
            }
    });
});
	</script>
@endsection