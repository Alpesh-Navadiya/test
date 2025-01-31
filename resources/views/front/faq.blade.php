@extends('layouts.frontLayout.front_design')
@section('title','Faq')
@section('content')

<section id="gotop" class="blog motpath pb-80">
    <div class="container">
      <div class="row">
        <!-- sidebar -->
        <div class="col-md-12 col-lg-4">
          <aside id="sidebar" class="sidebar mt-120 sec-bg1">
            <div class="menu categories clear">
              <h4 style="color:#4daaf2;">Game Rules</h4>
              <hr>
              <div class="heading pt-2"><a href="#gotop"  id="showall" class="gocheck active"> Fortnite boxfight rules</a></div>
              <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle" target="1"> Fortnite Buildfight rules</a></div>
              <div class="heading pt-2"><a href="#gotop" class="gocheck showSingle" target="2"> Valorant Spike rush 1v1's - 5v5's</a></div>

            </div>
          </aside>
        </div>
        <div class="pt-35 col-md-12 col-lg-8">
          <div class="wrap-blog">
            <div class="row">
              <div class="col-md-12 col-lg-12 knowledge">
                <div id="div3" class="wrapper targetDiv mt-5">
                  <h6><b><a href="" class="category">You must provide video footage if you suspect a player of hacking or breaking the rules.</a></b> <span class="float-right c-grey"></span></h6><hr>
                  <a href="">Fortnite boxfight rules </a>
                  <hr>

                  <div class="blog-info">
                    <p>*If an opponent leaves the match they will be given 5 minutes to come back if they do not come back by ttiven time then they will be disqualified and the other player will win.<br/>
                      *Exploits that are in the game at the time of playing are allowed if they can be used by both players<br>
                      *If there is a game glitch occurring, the rounds containing the game glitches do not count.<br/>
                      *If you suspect a player hacking or breaking the rules you must provide video proof therefor we reccomend always having creative replay mode on and taking screenshots of every round.<br/>
                      *There shouldnt be any spectators and only the players that are displayed on LoyalWagers website can be in the game. <br/>
                      *You must use the epic name and region you have chosen on the platform.</p>
                  </div><br>
                </div>
                <div id="div1" class="wrapper targetDiv mt-5">
                  <h6><b><a href="" class="category">You must provide video footage if you suspect a player of hacking or breaking the rules.</a></b> </h6><hr>
                  <a href="">Fortnite Buildfight rules</a>
                  <div class="blog-info">
                    <p>*You must only use wood to build.
                      *Build Fight can only be started by both players running towards a wall and one player editing so both players can run through and build two sets of 90's or 2 stories up.<br/>
                      *A grappler is only allowed to go back to the position you were at, if you were above the opponent and fell you must go below your opponent and cannot regain height by using a grappler.<br/>
                      *You are only allowed to reset the builds once you reach height limit.<br/>
                      *If you fall you are not allowed to break the build fight downm, you are only allowed to break up to 50% of the structures. <br/> </span></p>
                  </div><br>

                </div>
                <div id="div2" class="wrapper targetDiv mt-5">
                  <b><a href="" class="category"> -You must provide video footage if you suspect a player of hacking or breaking the rules.<br/>
                     -You also must provide a screenshot, if you do not have a screenshot and your opponent disputes then it will go into their favour.</a></b><hr>
                  <a href="">Valorant Spike rush 1v1's - 5v5's Game Rules </a>

                  <div class="blog-info">
                    <p>*Exploits can only be used if both players are able to use it<br/>
                      *You must only play the spike rush gamemode and must use map that is displayed in the lobby page.<br/>
                      *You must take a screenshot after every round incase of a dispute but will only need the last round screenshot if there is no dispute.<br/>
                      *Screenshots must show both player names and rounds.<br/>
                      *If you suspect a player of hacking or breaking the rules you must show us video footage by disputing and sending a link to the video for example by posting the video on youtube, instagram or twitter.<br/>
                      *If a player leaves they will be given 5 minutes to return and the game should be stopped there till the player comes back. if they player does not return after 5 minutes the player/team will be disqualified and the other player/team will win unless if the remaining players wish to continue the match without the player.<br/>
                       </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<a href="#0" class="cd-top"> <i>^</i> </a>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    sticky();
});
/*----------------------*/
/*   Sticky Sidebar     */
/*----------------------*/
function sticky() {
    $.fn.scrollBottom = function() {
        return $(document).height() - this.scrollTop() - this.height();
    };
    var $el = $('#sidebar');
    var $window = $(window);
    var top = $el.parent().position().top;
    $window.bind("scroll resize", function() {
        var gap = $window.height() - $el.height() - 0;
        var visibleFoot = 965 - $window.scrollBottom();
        var scrollTop = $window.scrollTop()
        if (scrollTop < top + 0) {
            $el.css({
                top: (top - scrollTop) + "px",
                bottom: "auto"
            });
        } else if (visibleFoot > gap) {
            $el.css({
                top: "auto",
                bottom: visibleFoot + "px"
            });
        } else {
            $el.css({
                top: 0,
                bottom: "auto"
            });
        }
    }).scroll();
}
</script>
@endsection