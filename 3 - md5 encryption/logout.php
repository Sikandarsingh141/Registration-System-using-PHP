<?php
session_start(); 
if (isset($_SESSION['uname']) && !empty($_SESSION['uname']) ) 
{ 
        session_destroy();
        echo "<script>
        window.location = 'index.php';
        alert('Successfully Logout');
        </script>";
} 
else 
{
                echo "<script>
		window.location = 'index.php';
		alert('Please Login To Continue');
		</script>";
}

?>