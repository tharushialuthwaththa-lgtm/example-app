@include('component.head')

@include('component.navbar')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashion Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>




<section class="hero">

    <div class="hero-text">
        <h1>Fashion Store</h1>

        <p>
            Discover the latest fashion trends and premium collections.

            Welcome to Fashion Store. We provide quality fashion products
            and accessories for modern customers.
            Welcome to Fashion Store. We provide quality fashion products
            and accessories for modern customers.
        </p>

        <a class="nav-link" href="{{route('customers-products')}}"> class="btn">
            Shop Now
        </>
    </div>

    <div class="hero-image">
        <img src="assets/images/img1.jpg" alt="Fashion">
    </div>



</section>
<script>

    function toggleMenu(){

        document
            .getElementById("sidebar")
            .classList
            .toggle("active");

    }

</script>
</body>
</html>
