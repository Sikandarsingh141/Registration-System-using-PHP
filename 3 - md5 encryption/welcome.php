<?php
session_start(); 
if ((isset($_SESSION['uname'])) && (!empty($_SESSION['uname'])) ) 
{ 
    
    // Not Do Anything When Session is Set


} 
else 
{
        echo "<script>
		window.location = 'index.php';
		alert('Please Login To Continue');
		</script>";
}

?>

<?php

include('connection.php');

$uname = $_SESSION['uname'];

$query_statement_for_fetching_user_name = "SELECT * FROM user_info WHERE uname='$uname'";

$query_run_for_fetching_user_name = mysqli_query($connection,$query_statement_for_fetching_user_name);

$fetch_name_of_user = mysqli_fetch_array($query_run_for_fetching_user_name);

$name = $fetch_name_of_user['name'];

$name_of_user_in_upper_case = ucwords($name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Welcome <?php echo $name_of_user_in_upper_case; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>