<?php include 'header.php'; ?>

<!-- SLIDER -->
<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="slide slide1">
        <div class="overlay">
          <h1>Enhance Your Beauty</h1>
          <p>Professional Beauty Services</p>
          <a href="contact.php" class="btn btn-custom">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="slide slide2">
        <div class="overlay">
          <h1>Bridal Makeup</h1>
          <p>Make Your Special Day Perfect</p>
          <a href="contact.php" class="btn btn-custom">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="slide slide3">
        <div class="overlay">
          <h1>Hair & Skin Care</h1>
          <p>Glow with Confidence</p>
          <a href="contact.php" class="btn btn-custom">Book Now</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

<?php include 'footer.php'; ?>