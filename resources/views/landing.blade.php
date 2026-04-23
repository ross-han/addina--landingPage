@include('partials.topbar')
@include('partials.navbar')

<section class="hero">

    <div class="hero-content">

        <!-- LEFT -->
        <div class="hero-left">
            <p class="tag">NEW ARRIVAL...</p>

            <h1>
                Elevate<br>
                 Your Home <br>
                Aesthetics<br>
            </h1>

            <p class="desc">
              A furniture e-commerce company operate in that digital space, offering a wide range of furniture products to customers through an online platform.
            </p>

           <button class="btn primary">BUY NOW ></button>
<button class="btn secondary">VIEW DETAILS ></button>

        </div>

        <!-- RIGHT -->
      <div class="hero-right">
    
    <img src="{{ asset('images/circle.png') }}" class="circle-img">

    <img src="{{ asset('images/chair1.png') }}" class="hero-img active">
    <img src="{{ asset('images/chair2.png') }}" class="hero-img">
    <img src="{{ asset('images/chair3.png') }}" class="hero-img">

    <!-- DOTS -->
    <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

</div>

</section>