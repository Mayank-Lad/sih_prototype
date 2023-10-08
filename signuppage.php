<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>E-Portal Case Management</title>
    <link rel="website icon" type="png" href="images/daily-jobs-now-high-resolution-logo-white-on-transparent-background.png" >
</head>
<body>
<form action="authentication.php"  method="POST" enctype="multipart/form-data">
      <div class="credentails">
        <br>
        <div>
        <label>Please Upload Your LLB/LLM degree in image format.</label>
        <br> 
<input type="file" name="uploadfile">
<div>
<br>
        <br>
    </div>
        <div>
        <label>Enter your Unique Identification Number</label>
        <br>
        <input type="text" name="Id" required placeholder="Your Unique id">
        <br>
        <br>
    </div>
    <br>
        <div>
        <label>Enter your Email-Id</label>
        <br>
        <input type="email" name="Emailid" required placeholder="Your email address">
        <br>
        <br>
    </div>
    <br>
        <div>
        <label>Enter your Contact Number</label>
        <br>
        <input type="tel" name="tel" required placeholder="Your phone number">
        <br>
        <br>
    </div>
    <br>
        <div>
        <label>Enter your Name</label>
        <br>
        <input type="text" name="name" required placeholder="Your Name">
        <br>
        <br>
    </div>
    <div>
        <label>Enter Password</label>
        <br>
        <input type="password" name="password" required placeholder="Your password">
        <br>
        <br></div>
  
    <input type="submit" value="Register">
</form>
    </div>
</div>
</body>

</html>

