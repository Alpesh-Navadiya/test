@extends('layouts.frontLayout.front_design')
@section('title','Sign Up')
@section('content')
<section id="register" class="top-section">
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
                <form action="{{ url('userRegi')}}" method="POST" class="login__form" id="regi">
                    <h1>Sign Up</h1>
                    <p class="mb-2">Sign up for free to start placing wagers and winning money!</p>
                    <small>Already registered? <a href="{{ route('mylogin')}}">Login here.</a></small>
                    <label class="mt-3" for="name">Name
                        <br>
                        <input class="w-100" id="name" name="name" autofocus type="text" placeholder="Enter your username"/>
                    </label>
                    <br>
                    <label for="gamername">EPIC ID
                        <br>
                        <input id="gamername" name="gamername" type="text" placeholder="Enter your EPIC ID"/>
                    </label>
                    <br>
                    <label for="email">Email
                        <br>
                        <input id="email" name="email" type="text" placeholder="Enter your email"/>
                    </label>
                    <br>
                    <label for="password">Password
                        <br>
                        <input id="password" name="password" type="password" placeholder="Enter your password"/>
                    </label>
                    <br>
                    <input type="submit" value="Sign Up" class="button--main button--square mt-3 button button--form"/>
                    <p class="mt-3 disclaimer">
                        By signing up, you accept our <a href="{{ route('terms')}}">Terms and conditions</a>
                        and <a href="{{ route('privacy-policy')}}">Privacy policy.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ url('public/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#regi").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email:true,
               remote:"{{ url('checkMail')}}"     
            },
            password: {
                required: true
            },
            gamername: {
                required: true,
               remote:"{{ url('checkEpic')}}"            
            }
        },
        messages: {
            name: {
                required: "Name is required"
            },
            password: {
                required: "Password is required"
            },
            gamername: {
                required: "Epic Id is required",
                remote:"Epic Id is already exists.."
            },
            email: {
                required: "Email Id is required",
                remote:"Email Id is already exists.."
                }
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
                           // window.location.href="{{ url('cart') }}";
                    },
                  
                });
            }
    });
});
	</script>
@endsection
