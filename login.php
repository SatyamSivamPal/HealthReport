<?php 
include('./connect.php');
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = $_POST['email'];
    if(!empty($email)){
        $query = "select * from health where email  = '$email' limit 1";
        $result = mysqli_query($conn, $query);     

        if(mysqli_num_rows($result) == 1)
        {
            $userData = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['id'] = $userData['id'];
            $_SESSION['username'] = $userData['name'];

            header("Location: storage.php");
            die;
        }
        else
        {
            echo "Login Failed";
        }
    }
}

?>