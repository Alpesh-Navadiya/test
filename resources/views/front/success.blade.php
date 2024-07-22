@extends('layouts.frontLayout.front_design')
@section('title','Terms & Condition')
@section('content')
<section id="terms" class="top-section">

<div class="status status--payment">
        <div class="container">
     
    
            <?php if($Lastid==True){ ?>
               <center> <h2 class="success" style="color:#25B5A5">Your Payment has been Successfully Done</h2>
             
                <h4>Payment Information</h4>
                <p><b>Reference Number:</b> <?php echo @$Lastid; ?></p>
                <p><b>Transaction ID:</b> <?php echo @$tnxId; ?></p>
                <p><b>Paid Amount:</b> <?php echo @$amt; ?></p>
                <p><b>Payment Status:</b> <?php echo @$payment_status; ?></p></center>
                <!-- <label class="mt-2" for="epicname">
                    Creator Name
                    <img class="question-icon" src="{{ url('public/assets/icons/question-mark.svg')}}" data-toggle="tooltip" title="Help creators by putting their code here">
                </label> -->
                <br>
                <!-- <input class="search-friend" type="text" id="creator" name="epicname"
                        placeholder="Enter creator name"> -->

            <?php }else{ ?>
                <h1 class="error">Your Payment has Failed</h1>
            <?php } ?>
            <br>
            <!-- <a href="https://loyalwager.hostingerapp.com/lobby.php" class="btn-link">Back to Lobby</a> -->
            <!-- <input onClick="update_creator('</?php echo $amt; ?>','</?php echo $tnxId; ?>')" type="submit" value="Back to Home" class="button button--main"> -->
        </div>
    </div>
</section> 
@endsection