
<div class="products-wrapper">
    <span class="subtitle">Top sale</span>
    <h1 class="title">Feature Products</h1>

    <!-- LEFT ARROW -->
    <button class="arrow-btn left" onclick="scrollRow(-1)">
        <i class="fa-solid fa-chevron-left"></i>
    </button>

    <!-- YOUR EXISTING CODE -->
    <div class="products-row" id="productsRow">

    <div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>

<div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>
<div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>
<div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>
<div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>
<div class="product-card">

    <!-- IMAGE -->
    <div class="product-img">
        <img src="{{ asset('images/chair1.png') }}" alt="Modern Chair">

        <div class="product-overlay">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-eye"></i>
        </div>
    </div>

    <!-- INFO BELOW IMAGE -->
    <div class="product-info">
        <h4 class="product-title">Modern Chair</h4>

        <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>

        <p class="price">$120</p>
    </div>

</div>



    </div>

    <!-- RIGHT ARROW -->
    <button class="arrow-btn right" onclick="scrollRow(1)">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

</div>

<script>
function scrollRow(direction) {
    const row = document.getElementById("productsRow");
    const scrollAmount = row.clientWidth;

    row.scrollBy({
        left: direction * scrollAmount,
        behavior: "smooth"
    });
}
</script>