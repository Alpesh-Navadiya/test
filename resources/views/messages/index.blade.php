<!-- <div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user --}}
                <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                    <p>{{ $message->message }}</p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" class="submit">
</div>  -->

    
<div class="message-wrapper">
           <?php
           ?>
            @foreach($messages as $message)
            <?php 
            $userId = $message->from;
            $query = \DB::table('users')->where('id',$userId)->first();
       
           ?>
                <div class="media {{ ($message->from == Auth::id()) ? 'media-chat' : 'media-chat media-chat-reverse' }} "> 
                      <?php if($message->from == Auth::id()){ ?>
                        
                      <img class="avatar" src="{{url('public/assets/images')}}/{{Auth::user()->pimage}}" alt="img">
                      <?php } else {   ?>
                      
                        <img class="avatar" src="{{url('public/assets/images')}}/{{$query->pimage}}" alt="img">
                      <?php  }?>
                        <div class="media-body">
                        <p>{{ $query->name }}</p>
                         
                         
                        <p>{{ $message->message }}</p>
                      
                        
                    <p class="date meta">{{ date('d M y, h:i a', strtotime($message->created_at)) }} </p>
                          <!-- <p class="meta"><time datetime="2018">23:58</time></p> -->
                        </div>
                </div>
            @endforeach    
    
                      <!-- <div class="media media-meta-day">Today</div> -->
                      <!-- <div class="media media-chat media-chat-reverse">
                        <div class="media-body">
                          <p>Hiii, I'm good.</p>
                          <p>How are you doing?</p>
                          <p>Long time no see! Tomorrow office. will be free on sunday.</p>
                          <p class="meta"><time datetime="2018">00:06</time></p>
                        </div>
                      </div> -->
                      
                      <!-- <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                      </div>
                      <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                      </div> -->
                    
                    <!-- <div class="input-text">
    <input type="text" name="message" class="submit">
</div> -->
</div>
