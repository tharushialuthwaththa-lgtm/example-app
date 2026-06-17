

@include('component.head')

@include('component.navbar')

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/footer.css">
<section class="hero">

    <div class="hero-image">
        <img src="assets/img/img1.jpg" alt="Fashion">
    </div>

    <div class="hero-text">
        <h1>Fashion Store</h1>

        <p>
            Welcome to Fashion Store. We provide quality fashion products
            and accessories for modern customers.
        </p>

        <a href="#" class="btn">Shop Now</a>
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

@include('component.footer')
</body>
</html>



















