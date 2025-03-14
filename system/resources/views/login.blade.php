
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ url('public/template/assets') }}/css/login.css">
</head>

<body>
    <div class="container">
        <div class="left-section">
            <img src="{{ url('public/template/assets') }}/images/plugins/sikia_ketapang.png" alt="Logo"
                class="logo">
        </div>
        <div class="right-section">
            <h1 class="title">SIKIA</h1>
            <h2>Log In</h2>
            <form action="#" method="POST" class="login-form">
                <input type="text" name="user_id" placeholder="User ID" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>
