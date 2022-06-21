<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShareYourCar</title>
  <!-- Scripts -->
  <script src="{{ asset('script/style.js') }}" defer></script>
  <!-- Styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    @include('includes.nav')
    <div class="flex-3d">
      <img src="images/pic2.jpg" class="foreground" />
      <div class="main-title-wrapper">
        <p class="share-your-car-title">Share your car!</p>
        <h1 class="share-your-car-p">Explore our car sharing marketplace</h1>
      </div>
      <div>
        <div class="search-wrapper">
          <div class="icon">
            <span class="material-symbols-outlined"> search </span>
          </div>
          <div class="input-group">
            <label>Where</label><input type="search" />
          </div>
          <div class="input-group">
            <label>From</label><input type="date" />
          </div>
          <div class="input-group">
            <label>Until</label><input type="date" />
          </div>
        </div>
      </div>
    </div>

    <section class="slider-container slider-dots">
      <div class="slider-container">
        <button class="before"><span class="material-symbols-outlined">
            chevron_left
          </span></button>
        <div class="slider">

          <div class="slide">
            <img src="vectors/City driver-pana.svg" alt="img1" />
            <div>
              <h3>Looking for the perfect car <span class="city">to drive in the city?</span></h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptates, nisi id atque, consequatur voluptas ipsa non tempore
                exercitationem est dignissimos iste magni dolore optio molestiae
                quos quasi, quod delectus aliquam.
              </p>
            </div>
          </div>
          <div class="slide">
            <img src="vectors/Trip-pana.svg" alt="img1" />
            <div>
              <h3>Looking for the perfect car <span class="trip">to your vacation?</span></h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptates, nisi id atque, consequatur voluptas ipsa non tempore
                exercitationem est dignissimos iste magni dolore optio molestiae
                quos quasi, quod delectus aliquam.
              </p>
            </div>
          </div>
          <div class="slide">
            <img src="vectors/By my car-pana.svg" alt="img1" />
            <div>
              <h3>Did you find the perfect car? <span class="rate">Rate us!</span></h3>
              <p class="slide-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptates, nisi id atque, consequatur voluptas ipsa non tempore
                exercitationem est dignissimos iste magni dolore optio molestiae
                quos quasi, quod delectus aliquam.
              </p>
            </div>
          </div>

        </div>

        <button class="after"><span class="material-symbols-outlined">
            chevron_right
          </span></button>
      </div>
      <div class="dots">
        <div class="dot">.</div>
        <div class="dot">.</div>
        <div class="dot">.</div>
      </div>

    </section>
    <div class="flex-3d">
      <img src="images/pic3.jpg" class="foreground" />
      <div class="title">Mizuuuuuu?!</div>
    </div>
    @include('includes.footer')
  </div>
</body>

</html>