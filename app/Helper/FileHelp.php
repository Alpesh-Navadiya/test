<?php 


        function users_name($id) { 
                  $users_name = \DB::table('users')->where('id','=',$id)->first(); 
                  return $users_name->slug; 
        } 
       
       
        
?>