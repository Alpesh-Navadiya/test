@extends('layouts.frontLayout.front_design')
@section('title','Wager')
@section('content')
<style>#overlay{display:none !important;}</style>
<div class="hero hero--account">
    <div class="container">
        <div class="d-flex">
            <img class="account__avatar mr-3" src="{{ url('public/assets/images/ava.jpg')}}" alt="">
            <div>
                <p class="account__name mb-0">{{ Auth::user()->name }}</p>
                <p class="account__gamername mb-0">{{ Auth::user()->gamername }}</p>
                <a href="#" id="change-avatar-link">Change Avatar</a>
            </div>
        </div>
    </div>
</div>
<div class="account__stats">
    <div class="container">
        <div class="account-bar text-center">
            <div class="row">
                <div class="col col-12 col-sm-4">
                    <p class="stats__headline">Earnings</p>
                    <p class="stats__value">$<?php echo @$value; ?></p>
                </div>
                <div class="col col-12 col-sm-4">
                    <p class="stats__headline">Record</p>
                    <p class="stats__value">0 W - 0 L</p>
                </div>
                <div class="col col-12 col-sm-4">
                    <p class="stats__headline">Recent matches</p>
                    <p class="stats__value">No Matches</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center mb-3">
    <div class="account-bar account-bar--tabs">
        <div class="row no-gutters">
          <div class="bs-example">
                <ul class="nav nav-tabs">
                        <li class="nav-item">
                        <img src="./assets/icons/navbar_avatar_icon.svg" alt="">
                            <a href="#details" class="nav-link active" data-toggle="tab">Account</a>
                        </li>
                        <li class="nav-item">
                        <img src="./assets/icons/money_icon_white.svg" alt="">
                            <a href="#wallet" class="nav-link" data-toggle="tab">Wallet</a>
                        </li>
                        <li class="nav-item">                            
                        <img src="./assets/icons/trophy_icon.svg" alt="">
                            <a href="#matches" class="nav-link" data-toggle="tab">Matches</a>
                        </li>
                        <li class="nav-item">
                        <img src="./assets/icons/ticket_icon.svg" alt="">
                            <a href="#tickets" class="nav-link" data-toggle="tab">Tickets</a>
                        </li>  
                </ul>
          </div>   
        </div>
    </div>
</div>
    <div class="tab-content">
<div class="tab-pane fade show active" id="details">
            <div class="container">
                <h2 class="no-underline">Edit Account</h2>
            </div>    
            <div class="container">
        <div class="edit-account-wrapper">
        <form action="{{ url('updateProfile')}}" method="POST" class="updateProfile" id="updateProfile">
                <div class="row">
                    <div class="col col-12 col-sm-6">
                        <h3>Your Info</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="email">Email Address
                            <br>
                            <input class="w-100" type="email" name="email_update" id="email_update" value="{{ Auth::user()->email }}">
                        </label>
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="name">Name
                            <br>
                            <input class="w-100" type="text" name="name_update" id="name_update" value="{{ Auth::user()->name }}" >
                        </label>
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="accountID">EPIC Account ID
                            <br>
                            <input class="w-100" type="text" name="accountID_update" id="accountID_update" value="{{ Auth::user()->gamername }}" >
                        </label>
                    </div>
                </div>
                <div class="mb-2"></div>
                <div class="text-left">
                        <input type="submit" id="profile_updates" class="button button--main"
                            value="Update Account Info">
                    </div>
            </form> 
            <form class="form-horizontal"  method="post" action="{{url('/currentPasswordUpdate')}}"  id="password_validate" >
                <div class="row">
                    <div class="col col-12 col-sm-6">
                        <h3>Password</h3>
                    </div>
                </div>
             <div class="row">
                <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="password">Current Password
                            <br>
                            <input class="w-100" type="password" name="current" id="current">
                        </label>
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="password">New Password
                            <br>
                            <input class="w-100" type="password" name="password_update" id="password_update">
                        </label>
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label class="w-100" for="confirmPassword">Confirm Password
                            <br>
                            <input class="w-100" type="password" name="confirmPassword" id="confirmPassword_update">
                        </label>
                    </div>
                </div>
                <div class="mb-2"></div>
                <div class="text-left">
                        <input type="submit" id="profile_updates" class="button button--main"
                            value="Change Password">
                    </div>
            </form>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="wallet">
         <?php 
            // PayPal configuration  
define('PAYPAL_ID', 'sb-bqtpr1353259@business.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
define('Client_ID', 'ATf-r5_8lgXvywwVpSWOcwtFi7rL17K8OXjtoCUJsS-bzYfZWmj4iYwowagjZxcT4SSeIJinjC3O4ewP');
define('PAYPAL_RETURN_URL', 'https://loyalwagers.com/paying/success.php'); 
define('PAYPAL_CANCEL_URL', 'https://loyalwagers.com/paying/success.php'); 
define('PAYPAL_CURRENCY', 'USD');  
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
                        $PAYPAL_URL = PAYPAL_URL;
                        $PAYPAL_ID = PAYPAL_ID;
                        $PAYPAL_CURRENCY = PAYPAL_CURRENCY;
                        $PAYPAL_RETURN_URL = PAYPAL_RETURN_URL;
                        $PAYPAL_CANCEL_URL = PAYPAL_CANCEL_URL;
                        $Client_ID = PAYPAL_ID;
          ?>
     <script src="https://www.paypal.com/sdk/js?client-id=sb" data-csp-nonce="xyz-123"></script>

         <div class="container">
        <div class="account-bar text-center">
            <div class="row d-flex">
                <div class="col col-12 col-lg-3 account__credits-show-wrapper">
                    <p class="mb-1">Wallet</p>
                    <p class="account__credits mb-0">$<?php echo @$value; ?></p>
                </div>
                <div class="col col-12 col-md-3 col-lg-3 account__credits-add-wrapper">
                    <form action='<?php echo @$PAYPAL_URL; ?>' method='post'>
                        <!-- Identify your business so that you can collect the payments. -->
                        <input type='hidden' name='business' value='<?php echo @$PAYPAL_ID; ?>'>
                        <!-- Specify a Buy Now button. -->
                        <input type='hidden' name='cmd' value='_xclick'>
                        <!-- Specify details about the item that buyers will purchase. -->
                        <input type='hidden' name='currency_code' id='currency_code' value='<?php echo @$PAYPAL_CURRENCY; ?>'>

                       
                        <!-- Specify URLs -->
                        
                        <select name="amount" id="amount">
                            <option value="">-- Select Amount --<option>
							<option value="3.15">$2.5</option>
                            <option value="6.25">$5</option>
                            <option value="11.60">$10</option>
                            <option value="17">$15</option>
                            <option value="28">$25</option>
                        </select>
                        <input type='hidden' name='return' value='{{ url("success")}}'>
                        <input type='hidden' name='cancel_return' value='{{ route("cancel")}}'>
                        
                        <input class="button button--main" id="myBtn" onClick="save_creator()" type="submit" value="Add Credits">
                       
                    </form>
                </div>
                <div class="col col-12 col-md-9 col-lg-6 account__credits-withdraw-wrapper">
                    <form action=''>
                        <input class="account__paypal-input" type="text" name="accounts" id="accounts" placeholder='Paypal Account'>
                        <div class="d-flex withdraw__select-btn-wrapper">
                            <select name="withdrawCredits" id="withdrawCredits">
                                <!--<option value="4.4">5$</option>
                                <option value="9.20">10$</option>
                                <option value="14">15$</option>
                                <option value="23.75">25$</option>
                                <option value="47.5">50$</option>-->
								<option value="1.80">$2.5</option>
								 <option value="4.15">$5</option>
								<option value="8.80">$10</option>
								<option value="13.20">$15</option>
								<option value="22.50">$25</option>
                            </select>
                            <input class="button button--white withdraw" type="submit" value="Withdraw Funds">  
                        </div>
         

                    </form>
                </div>
                <div class="container">
                 
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="tab-pane fade" id="matches">     
    <div class="container">
        <h2 class="no-underline mb-1">Matches</h2>
        <div class="row">
            <!-- <div class="col col-12 col-sm-4">
                <div class="card card--match">
                    <div class="card-match__top">
                        <p class="card-match__game">Fortnite - <span class="card-match__wager-amount">10$</span></p>
                        <p class="card-match__mode">Boxfight</p>
                        <p class="card-match__date">20.2.2020 16:47</p>
                    </div>
                    <div class="card-match__bg-dark">
                        <p class="card-match__header">Opponent</p>
                        <p>MasterPlayer123</p>
                    </div>
                    <div class="card-match__bg-darker">
                        <p class="card-match__header">Result</p>
                        <p class="card-match__score">5-3</p>
                    </div>
                    <div class="card-match__credits winner">
                        +20 credits
                    </div>
                </div>
            </div>

            <div class="col col-12 col-sm-4">
                <div class="card card--match">
                    <div class="card-match__top">
                        <p class="card-match__game">Fortnite - <span class="card-match__wager-amount">10$</span></p>
                        <p class="card-match__mode">Boxfight</p>
                        <p class="card-match__date">20.1.2020 16:22</p>
                    </div>
                    <div class="card-match__bg-dark">
                        <p class="card-match__header">Opponent</p>
                        <p>Sniper12</p>
                    </div>
                    <div class="card-match__bg-darker">
                        <p class="card-match__header">Result</p>
                        <p class="card-match__score">0-3</p>
                    </div>
                    <div class="card-match__credits loser">
                        -30 credits
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="tab-pane fade" id="tickets">          
   <div class="container">
        <div class="d-flex align-items-center">
            <h2 class="no-underline mb-1">Tickets</h2>
        </div>
        <hr class="line-separator--white mb-3">
        <input type="hidden" name="me" id="me" value=<?php echo @$_SESSION["username"];?>>
        <div class="ticket" id='ticketlist'>     </div>
    </div>
</div>
</div>    
<div class="mb-5"></div>   
<script src="{{ url('public/js/jquery.validate.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<script>
$(document).ready(function(){
    document.getElementById("myBtn").disabled = true;
    $('#amount').on('change', function(){
        var amounta = $(this).val();
        var currency_code = $('#currency_code').val();
        $.ajax({
			type:'POST',
			data:{'amounta':amounta,'currency_code':currency_code},
			url:"{{ url('getAmount')}}",
			success:function(resp){
			    document.getElementById("myBtn").disabled = false;
			}
		});        
    })
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $("#updateProfile").validate({
        rules: {
            name_update: {
                required: true
            },
            accountID_update: {
                required: true
            },
            email_update: {
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
                            alertify.set('notifier','delay', 3);
                            alertify.set('notifier','position', 'top-right');
                            alertify.success('Profile has been Updated..');
                    	}
                    },
                    error:function(xhr){
                        console.log(xhr.responseJSON.message);
                     }
                });
            }
    });
});
    </script>
    <script type="text/javascript">
   $(document).ready(function(){  
        $('#password_validate').validate({
            rules:{
                current:{
                  required:true
                },
                password_update:{
                    required:true
                },
                confirmPassword:{
                    required:true,
                    equalTo: "#password_update"
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
                        if(data == 'true'){
                            alertify.set('notifier','delay', 3);
                            alertify.set('notifier','position', 'top-right');
                            alertify.success('Password is Changed..');
                            document.getElementById("password_validate").reset();
                    	}
                        else if(data == 'false'){
                            alertify.set('notifier','delay', 3);
                            alertify.set('notifier','position', 'top-right');
                            alertify.error('Old Password is Wrong..');
                        }
                    },              
                });
            }
        })
}); 
</script>
@endsection