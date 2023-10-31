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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Link - CSS --}}
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="/user/store" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Create Account</h1>

                <span>Use your email for registration</span>
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"/>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>

                <input type="text" name="position" placeholder="Position" value="{{ old('position') }}"/>
                <input type="text" name="description" placeholder="Description" value="{{ old('description') }}"/>

                <input type="password" name="password" placeholder="Password" />

                <span>chose your profile picture</span>
                <label for="profile_img" class="avatar-upload">
                    <img src="/imgs/utilities/avatar_user.jpg" alt="profile_img">
                </label>
                <input type="file" name="profile_img" id="profile_img">

                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="/user/validation">
                @csrf
                <h1>Sign in</h1>


                @if (session('message'))
                    <div class="mt-4 alert alert-{{ session('css') }}">
                        {{ session('message') }}
                    </div>
                @endif


                @if( $errors->any() )
                    <div class="text-start mt-4 alert alert-danger">
                        @foreach( $errors->all() as $error )
                            <p class="m-0 p-0"><i class='bx bxs-error'></i> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <span class="pt-3">Welcome back</span>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/login.js"></script>
</body>

</html>
