

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

@include('component.head')

@include('component.navbar')

    <body>
<div class="login-container">

    <div class="login-box">


        <h2>Welcome Back</h2>
        <p>Login to your account</p>

        <form action="{{ route('login.check') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="login-btn">
                Login
            </button>

        </form>
        <div class="extra-links">
            <a href="#">Forgot Password?</a>
            <p>
                Don't have an account?
                <a href="{{ route('register') }}">Register</a>
            </p>
        </div>


    </div>

</div>
    <script>

        function toggleMenu(){

            document
                .getElementById("sidebar")
                .classList
                .toggle("active");

        }

    </script>

    @include('component.footer')

</body>
</html>
