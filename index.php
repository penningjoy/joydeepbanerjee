<?php include('index.html'); 
//redirect to https 
function redirectTohttps() 
 { 
   if($_SERVER['HTTPS']!=”on”) 
   { 
     $redirect= “https://”.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     header(“Location:$redirect”);
   } 
 } ?>
