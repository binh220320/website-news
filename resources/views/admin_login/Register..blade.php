<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style_login.css') }}">
</head>
<body>
    <script language="javascript" src="kiemtra.js"></script>
    <form action="" method="POST" onsubmit="return validate()">
    <div class="to">
    <div class="form">
        <h1 class="h2">Sign Up</h1>
        <label for="username">User Name</label>
        <input type="text" placeholder="Name" name="username" id="username">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="Email" id="Email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <label for="password-repeat">Confirm password</label>
        <input type="password" placeholder="Confirm password" name="password-repeat" id="password-repeat">
        <input id="submit" type="submit" name="submit" value="Ok">
    </div>
</div>
</form>
</body>
</html>