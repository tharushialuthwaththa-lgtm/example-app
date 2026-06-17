@include('component.head')

@include('component.navbar')
<head>
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/about.css">


    <link rel="stylesheet" href="assets/css/footer.css">

    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body>



<section class="contact">

    <h1>Contact Us</h1>

    <p>Have questions? Get in touch with us.</p>

    <form class="contact-form">

        <input type="text" placeholder="Your Name" required>

        <input type="email" placeholder="Your Email" required>

        <input type="text" placeholder="Subject" required>

        <textarea rows="5" placeholder="Your Message"></textarea>

        <button type="submit" class="btn">
            Send Message
        </button>

    </form>

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
