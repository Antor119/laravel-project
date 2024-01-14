<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 8px;
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      color: #333;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .login-form label {
      margin-bottom: 8px;
      color: #555;
    }

    .login-form input {
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login-form button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #45a049;
    }
    .signup{
        text-align: center;
        margin-top: 10px;

    }

    .signup a{
        text-decoration: none;
        color: white;
    }
    .signup button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .signup button:hover {
      background-color: #0d360f;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login</h2>
  <form class="login-form"  action= "{{route('logindata')}}" method="post"  id="quickFrom" enctype="mulipart/form-data">
    @csrf
    <label for="username">Email:</label>
    <input type="Email" id="username" name="email" placeholder="Enter your email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <button type="submit">Login</button>

    <div class="signup form-group">
       <button type="submit"> <a href="{{route('pages.signup')}}">Signup Now</a></button>
    </div>
  </form>
</div>

</body>
</html>
