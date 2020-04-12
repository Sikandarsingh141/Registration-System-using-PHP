<?php

include('connection.php');

if(isset($_POST['sub']))
{
    if(empty($_POST["uname"]) && empty($_POST["pass"]))  
    {  
         echo '<script>
         alert("All Fields are required");
         window.location="login.php";
         </script>';  
    }  
    else  
    {  
         $uname = htmlspecialchars($_POST["uname"]);  
         $pass = htmlspecialchars($_POST["pass"]);  
         $protected_password = md5($pass);   
         $query = "SELECT * FROM user_info WHERE uname = '$uname' AND pass = '$protected_password'"; 
         $query_run = mysqli_query($connection, $query);  

         if(mysqli_num_rows($query_run) > 0)  
         {  
              session_start(); 
              $query_statement_for_fetching_id = "SELECT * FROM user_info";
              $query_run_for_fetching_id = mysqli_query($connection,$query_statement_for_fetching_id);
              $fetch_data_from_table_user_info = mysqli_fetch_array($query_run_for_fetching_id);
              $id = $fetch_data_from_table_user_info['id'];
              $_SESSION['id'] = $id; 
              echo '<script>
              window.location="welcome.php";
              </script>'; 

         }  
         else  
         {  
              echo '<script>
              alert("Invalid Username & Password");
              window.location="login.php";
              </script>';  
         }  
    }  
}

?>