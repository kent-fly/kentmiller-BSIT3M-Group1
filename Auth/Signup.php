<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="form.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<h2>Sign Up</h2>
<form id="signupForm" method="POST" action="simple_signup.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Sign Up</button>
</form>

<div id="response"></div>

<script src="login.js"></script>

</body>
</html>
