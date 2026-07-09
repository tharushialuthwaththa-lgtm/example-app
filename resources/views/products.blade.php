<@include('component.head')

<head>
<link rel="stylesheet" href="../assets/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/products.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

@include('component.navbar')

<section class="products">

    <div class="product-grid">

        <div class="card">
            <a href="{{ route('product.details', 1) }}">
            <div class="product-top">
                <img src="../../assets/img/sh1.jpg" alt="Red Roses">
            </div>

            <h4>Combination White Skirt With Blouse</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2500</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh2.jpg" alt="Red Roses">
            </div>

            <h4>Tops To Wear With Long Skirt</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.4000</p>

        </div>


        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh3.jpg" alt="Red Roses">
            </div>

            <h4>A woman in a black leather skirt & white shirt</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2200</p>

        </div>


        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh4.jpg" alt="Red Roses">
            </div>

            <h4>Western Denim Shirt & White Peasant Skirt</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>





        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh5.jpg" alt="Red Roses">
            </div>

            <h4>Top Wear To Pair With Pencil Skirts</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2100</p>

        </div>
        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh6.jpg" alt="Red Roses">
            </div>

            <h4>Puff Sleeve Collar Shirt</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2500</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh7.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.4000</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh8.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh1.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>

        </div>
        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh8.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh8.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>

        </div>

        <div class="card">

            <div class="product-top">
                <img src="../../assets/img/sh8.jpg" alt="Red Roses">
            </div>

            <h4>Product Name</h4>

            <div class="rating">★★★★★</div>

            <p>Rs.2000</p>

        </div>

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
