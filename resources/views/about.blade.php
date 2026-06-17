

@include('component.head')

@include('component.navbar')

<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/about.css">
<link rel="stylesheet" href="../assets/css/footer.css">
<section class="about">
    <h1>About Fashion Store</h1>

    <p>
        Welcome to Fashion Store. We provide quality fashion products
        and accessories for modern customers.
        and accessories for modern customers.
    </p>


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
