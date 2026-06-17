
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>


<body>

@include('component.head')

@include('component.navbar')
<div class="register-container">

    <div class="register-box">


        <h2>Welcome Back</h2>
        <p>Register to your account</p>

        <form action="" method="POST">

            <div class="input-group">
                <label>First Name</label>
                <input type="firstname" name="firstname" placeholder="firstname" required>
            </div>

            <div class="input-group">
                <label>Second Name</label>
                <input type="secondname" name="secondname" placeholder="secondname" required>
            </div>


            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>

            <button type="#" class="register-btn">
                Register
            </button>

        </form>


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
