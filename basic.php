<?php

   $server="localhost";
   $username="root";
   $password="";

   $con=mysqli_connect($server,$username,$password);


   if(!$con){
       die("conenction to this databse failed due to".mysqli_connect_error());
   }
   else{
   echo"success connected to the db"
   }
 