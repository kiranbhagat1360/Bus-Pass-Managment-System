<?php
$userid = filter_input(INPUT_POST,'userid');
$password = filter_input(INPUT_POST,'password');

// echo "user id is -->"+$userid;
if(!empty($userid)){
        if(!empty($password)){
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
              echo "connection established!";
                 $sql = "INSERT INTO admin (userid,password)  
                                 values('$userid','$password')";
                   if($conn->query($sql)){
                          echo "New record is inserted sucessfully";
                                         }
               else{
                          echo "Error:".$sql."<br>".$conn->error;
                   }
                          $conn->close();
               }
                             }
                              else{
                                          echo "Password should not be empty";
                                          die();
                                   }   
         }
         
?>

