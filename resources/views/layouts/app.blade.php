<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <title>Ecommerce</title>
</head>
<body>

    @yield('content')
<script>
document.addEventListener("DOMContentLoaded", function () {

    const images = document.querySelectorAll('.hero-img');
    const dots = document.querySelectorAll('.dot');

    let index = 0;

    setInterval(() => {
        // remove active
        images[index].classList.remove('active');
        dots[index].classList.remove('active');

        // next index
        index = (index + 1) % images.length;

        // add active
        images[index].classList.add('active');
        dots[index].classList.add('active');

    }, 5000);

});
</script>
</body>
</html>