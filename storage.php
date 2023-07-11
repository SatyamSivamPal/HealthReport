<?php
    include('./connect.php');
    session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }

    // User is logged in, retrieve user data
        $user_id = $_SESSION['id'];
        $username = $_SESSION['username'];

        $query = "select * from health where id  = '$user_id' limit 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $file = $row['file'];

    echo '
    <body>
            <h1 class="text-center my-4">User data</h1>
        <div class="container mt-5 d-flex justify-content-center">
            <table class="table table-bordered w-50" >
                <thead>
                    <tr>
                        <th scope="col">Sl no</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Report</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td><a href = "./'.$file.'" >'.$file.' </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>


    '

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        img{
            width:200px;
        }
    </style>
    <title>Storage</title>
</head>
</html>