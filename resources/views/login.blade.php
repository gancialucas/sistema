<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>Log In</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="/public/imgs/logo.png" type="image/x-icon">

    {{-- Scripts - Tailwind & SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Link - CSS --}}
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="/user/store">
                @csrf
                <h1>Create Account</h1>

                <div class="social-container">
                    <a href="#" class="social"><i class='bx bxl-meta'></i></a>
                    <a href="#" class="social"><i class='bx bxl-google'></i></a>
                    <a href="#" class="social"><i class='bx bxl-linkedin'></i></i></a>
                </div>

                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="name" />
                <input type="email" name="email" placeholder="email" />
                <input type="password" name="password" placeholder="password" />

                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="/user/validation">
                @csrf
                <h1>Sign in</h1>

                <div class="social-container">
                    <a href="#" class="social"><i class='bx bxl-meta'></i></a>
                    <a href="#" class="social"><i class='bx bxl-google'></i></a>
                    <a href="#" class="social"><i class='bx bxl-linkedin'></i></i></a>
                </div>

                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />

                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/login.js"></script>
</body>

</html>
