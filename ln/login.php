<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Login</title>
</head>
<body>
   <h1>Login Form</h1>
   <form action="authenticate.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login">
   </form>
</body>
</html>
