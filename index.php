<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health Report</title>
    <script
      src="https://kit.fontawesome.com/5d0dc6e6d4.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/mainPage.css"/>
  </head>
  <body>
    <div class="container">
      <div class="form-box">  
        <h1>Registration Form</h1>
        <form action = "http://localhost/inter/display.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <div class="input-field">
              <i class="fa-solid fa-user"></i>
              <input type="text" placeholder="Name" name="name" />
            </div>
            <div class="input-field">
              <input type="number" placeholder=" Age" name="age" />
            </div>
            <div class="input-field">
              <input type="number" placeholder="Weight" name="weight" />
            </div>
            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <p>Upload Report</p>
                <input type="file" name="file" id="" >
                
            </div>
          </div>
          <div class="btn-field">
            <button type="submit" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
