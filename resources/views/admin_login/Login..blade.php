<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style_login.css') }}">
</head>
<body>
    <div class="to">
    <div class="form">
        <h1 class="h2">Login</h1>
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="Email" id="Email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <input id="submit" type="submit" name="submit" value="Ok">
    </div>
</div>
</body>
</html>