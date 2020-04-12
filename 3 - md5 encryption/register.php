<?php

include('connection.php');

if(isset($_POST['sub']))
{
    
    if((!empty($_POST['uname'])) && (!empty($_POST['email'])) && (!empty($_POST['pass'])) && (!empty($_POST['cpass'])))
    {
      $name = htmlspecialchars($_POST['name']);
      $uname = htmlspecialchars($_POST['uname']);
      $email = htmlspecialchars($_POST['email']);
      $pass = htmlspecialchars($_POST['pass']);
      $cpass = $_POST['cpass'];

      

      $query_statement_for_checking_username = "SELECT id FROM user_info WHERE uname='$uname' ";
      
      $query_statement_for_checking_email = "SELECT id FROM user_info WHERE email='$email'";

      $query_for_username = mysqli_query($connection,$query_statement_for_checking_username);
      $query_for_email = mysqli_query($connection,$query_statement_for_checking_email);

      

      if($cpass != $pass)
      {
        echo "<script>
        alert('Password Not Match');
        window.location = 'index.php';
        </script>";
      }
      elseif(mysqli_num_rows($query_for_username) == true)
      {
        echo "<script>
        window.location = 'index.php';
        alert('Username Already Exist');
        </script>";
      }
      elseif(mysqli_num_rows($query_for_email) == true)
      {
          echo "
          <script>
          window.location = 'index.php';
          alert('Email Already Exist');
          </script>";
      }
      else
      {

        $protected_password = md5($pass);

        $query_for_inserting_form_data_into_database = "INSERT INTO `user_info`(`name`,`uname`,`email`,`pass`) VALUES('$name','$uname','$email','$protected_password')";

        if(mysqli_query($connection,$query_for_inserting_form_data_into_database))
        {
            
           
            session_start();
            $_SESSION['uname'] = $uname;
            echo "<script>
            alert('Data Inserted');
            window.location = 'welcome.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Data Not Inserted');
            window.location = 'index.php';
            </script>";
        }   
      }

    }
    else
    {
        echo "<script>
        alert('All fields are required');
        window.location='index.php';
        </script>";
    }
    
}

?>