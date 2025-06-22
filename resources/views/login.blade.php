<!DOCTYPE html>
<html lang="en">
<style>
    .password-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .password-wrapper input[type="password"],
    .password-wrapper input[type="text"] {
        width: 100%;
        padding-right: 40px;
        /* agar tidak ketimpa ikon */
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        cursor: pointer;
        font-size: 18px;
        color: #555;
    }

    .alert-error {
        background-color: #f8d7da;
        color: #842029;
        padding: 12px 15px;
        border: 1px solid #f5c2c7;
        border-radius: 6px;
        margin-bottom: 20px;
        font-size: 14px;
        text-align: center;
    }

    
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/login.css') }}">
</head>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.querySelector('.toggle-password');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.textContent = "🙈";
        } else {
            passwordInput.type = "password";
            icon.textContent = "👁️";
        }
    }
</script>

<body>
    <div class="container">
        <div class="left-section">
            <img src="{{ url('/template/assets') }}/images/plugins/sikia_ketapang.png" alt="Logo"
                class="logo">
        </div>
        <div class="right-section">
            <h1 class="title">SIKIA</h1>
            <h2>Log In</h2>
            @if ($errors->has('error'))
                <div class="alert-error">
                    {{ $errors->first('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <input type="text" name="email" placeholder="email" required>
                <div class="password-wrapper">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        👁️
                    </span>
                </div>

                {{-- <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember">
                    <label for="remember-me">Remember me</label>
                </div> --}}
                <button type="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>
