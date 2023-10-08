<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Admin Login</h1>
    <form action="authentication3.php" method="POST">
      <div class="form-group">
      <div class="credentails">
        <br>
        <div>
        <label>Enter your Username</label>
        <br>
        <input type="text" name="username" required placeholder="Your UserName">
        <br>
        <br>
    </div>
    <div>
        <label>Enter Password</label>
        <br>
        <input type="password" name="password" required placeholder="Your password">
        <br>
        <br>
        <div>
        <input type="submit" value="submit">
    </div>
    </form>
  </div>
</body>
</html>
