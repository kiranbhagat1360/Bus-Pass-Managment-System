<?php
$name = filter_input(INPUT_POST,'name');
$name1 = filter_input(INPUT_POST,'name1');
$name2 = filter_input(INPUT_POST,'name2 ');
$DOB = filter_input(INPUT_POST,'DOB');
$MNUM= filter_input(INPUT_POST,'MNUM');
$male = filter_input(INPUT_POST,'male');
$From2 = filter_input(INPUT_POST,'From2');
$From1 = filter_input(INPUT_POST,'From1');
$number= filter_input(INPUT_POST,'number');
$number1 = filter_input(INPUT_POST,'number1');
$pass = filter_input(INPUT_POST,'pass');
$pass1= filter_input(INPUT_POST,'pass1');




  if(!empty($name)){
    if(!empty($name1)){
        if(!empty($name2)){
           if(!empty($DOB)){
             if(!empty($MNUM)){
                if(!empty($male)){
                    if(!empty($From2)){
                        if(!empty($From1)){
                           if(!empty($number)){
                                if(!empty($number1)){
                                   if(!empty($pass)){
                                      if(!empty($pass1)){

        $host ="localhost";
        $dbusername = "root";
        $dppassword ="";
        $dbname = "msrtc";
        //connection
        $conn = new mysqli($host,$dbusername,$dppassword,$dbname);
        
       if(mysqli_connect_error()){
                                   die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
                                 }
            else{
              //  echo "connection established!";

 $sql = "INSERT INTO form (name,name1,name2,DOB,MNUM,male,From2,From1,number,number1,pass,pass1)   
              values('$name','$name1','$name2','$DOB','$MNUM','$male','$From2','$From1','$number','$number1','$pass','$pass1')"; 
                  if($conn->query($sql)){
                    echo "New record is inserted sucessfully";
                              die();
                                        }  
                    
                                        else{
                                          echo "New should not be inserted ";
                                                    echo "Error:".$sql."<br>".$conn->error;
                                             }
               
