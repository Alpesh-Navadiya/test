@extends('layouts.frontLayout.front_design')
@section('title','Contact us')
@section('content')

<div class="hero hero--contact">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-5">
                <h1 data-aos="fade-up" data-aos-once="true" >Contact</h1>
            </div>
            <div class="col col-12 col-md-7">
                <p>
                    Send a message to support through the contact form or
                    email us at support@loyalwagers.com. You can also open a support ticket.
                </p>
                <p>
                    Have a suggestion? Feedback and comments are always welcome. 
                    We're always looking to improve the site. 
                </p>
            </div>
        </div>
    </div>
</div>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-5">
                <h2>Contact Info</h2>
                <p>
                    <img class="mr-2" src="{{ url('public/assets/icons/mail_blue.svg')}}" alt="">
                    support@loyalwagers.com
                </p>
                <h2 class="mt-5">Connect with us</h2>
                <div class="social-icons mb-5">
                    <a href="https://discord.gg/crm4Fzb" target="__blank" rel="noopener noreferrer">
                        <img class="mr-2" height="23px" src="{{ url('public/assets/icons/discord_blue.svg')}}" alt="">
                    </a>
                    <a href="https://www.instagram.com/loyalwagers/" target="__blank" rel="noopener noreferrer">
                        <img class="mr-2" height="23px" src="{{ url('public/assets/icons/IG_blue.svg')}}" alt="">
                    </a>
                    <a href="https://www.youtube.com/channel/UCeleoadttX5jRQyzGqvSEHQ" target="__blank" rel="noopener noreferrer">
                        <img class="mr-2" height="23px" src="{{ url('public/assets/icons/YT_blue.svg')}}" alt="">
                    </a>
                    <a href="https://twitter.com/loyalwagers" target="__blank" rel="noopener noreferrer">
                        <img height="23px" src="{{ url('public/assets/icons/twitter_blue.svg')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col col-12 col-sm-7">
                <form class="form form--contact" action="{{ route('contactform')}}" id="contactUs"> 
                    <div class="row">
                        <div class="col col-12 col-sm-6 mb-2">
                            <label class="w-100" for="name">EPIC ID
                                <input class="w-100" type="text" placeholder="Enter EPIC ID" id='epic'name="epic">
                            </label>
                        </div>
                        <div class="col col-12 col-sm-6 mb-2">
                            <label class="w-100" for="email">Email
                                <input class="w-100" type="text" placeholder="Enter email" id='email'name="email">
                            </label>
                        </div>
                    </div>
                    <label class="w-100" for="message">Message
                        <textarea class="w-100" id='message' name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                    </label>
                    <label for="">Subject</label>
                    
                    <select class="select form-control search-slt" id="subject" name="subject" >
                        <option value="Open Ticket">Open Ticket</option>
                        <option value="Feedback/Other">Feedback/Other</option>
                    </select>

                    <input class="button button--main mt-2" id='form_submit'type="submit" value="Send">
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
    $("#contactUs").validate({
        rules: {
            epic: {
                required: true
            },
            email: {
                required: true,
                email:true,
             },
            message: {
                required: true
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
                        if(data == 'Sent'){
                            alertify.set('notifier','delay', 5);
                             alertify.set('notifier','position', 'top-right');
                             alertify.success('We will contact you soon.. ' );
                        }   
                        // window.location.href="{{ url('cart') }}";
                    },
                    error:function(xhr){
                      
                      //  $('#loginForm #errorMsg').show().text(xhr.responseJSON.message);
                            // alertify.set('notifier','delay', 5);
                            // alertify.set('notifier','position', 'top-right');
                            // alertify.error('Some error occured, please try again! : ' );
                       //alertify.error("Some error occured, please try again!");
                    }
                });
            }
    });
});
	</script>
@endsection