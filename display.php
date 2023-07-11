<?php 

    include('./connect.php');

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $email = $_POST['email'];
        $report = $_FILES['file'];

        $reportFileName = $report['name'];

        $reportFileError = $report['error'];

        $reportFileTemp = $report['tmp_name'];

        $reportFileSeparate = explode('.',$reportFileName);

        $reportFileExtension = strtolower($reportFileSeparate[1]);
  

        $extension=array('pdf','docx','png','jpg','jpeg','gif','doc','txt','xls','ppt');
        if(in_array($reportFileExtension,$extension)){
            $upload_file='files/'.$reportFileName;
            move_uploaded_file($reportFileTemp,$upload_file);
            $sql="insert into `health` (name,age,weight,email,file) values ('$name','$age','$weight','$email','$upload_file')";
            $result=mysqli_query($conn,$sql);
        
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/./login.css">
    <script
      src="https://kit.fontawesome.com/5d0dc6e6d4.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess: </strong>Data inserted sucessfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="container">
        <div class="form-box">
            <h1>Login</h1>
                <form action="login.php" method = "post">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope" id = "icon"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="btn-field">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html> 

