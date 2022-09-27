<?php
$adharnumber = filter_input(INPUT_POST,'adharnumber');
$studentpassword = filter_input(INPUT_POST,'studentpassword');

// echo "user id is -->"+$userid;
if(!empty($adharnumber)){
        if(!empty($studentpassword)){
        $host ="localhost";
        $dbusername = "root";
        $dppassword ="";
        $dbname = "msrtc";
        //connection
        $conn = new mysqli($host,$dbusername,$dppassword,$dbname);
        
       if(mysqli_connect_error()){
                 die('Connect Erro('.mysqli_connect_error().')'.mysqli_connect_error());
       }
            else{
              echo "connection established!";
                          $sql = "INSERT INTO studentlogin (adharnumber,studentpassword)  
                                values('$adharnumber','$studentpassword')";
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
         else{
              echo "Password should not be empty";
              die();
       } 
         
?>

