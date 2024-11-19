{{-- @extends('login.main') --}}

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/src/loginpage/login.css">
    <title>Login</title>
</head>
<body>

    <div class="container" id="container">
        @if(session('error'))
        <div class="alert alert-danger">
            <script>
            // {{session('error')}}
        alert("User already Exists")
        </script>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{session('error')}}
        </div>
        @endif

        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Sign In</h1>
                <input type="text" class="form-control" id="name" placeholder="Username" name="name" required>
                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                <input type="password" class="form-control" id="password" placeholder="Enter Password here" name="password" required>
                <p id="min">Password must be 8 Characters Long</p>
                <input type="password" class="form-control" id="reenterpassword" placeholder="Re Enter Your Password" name="re_enter_password" required>
                <p style="color: red" class="pass">Password Mismatch!</p>
                <a href="#">Forget Your Password?</a>
                <button class="signinButton">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p style="color: white;">Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login" >Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>SOUND, GROUP!</h1>
                    <p style="color: white;">Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/src/loginpage/login.js"></script>
</body>

</html>