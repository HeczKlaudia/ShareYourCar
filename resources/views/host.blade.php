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
    <script src="https://kit.fontawesome.com/44076e1688.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/host.css') }}" rel="stylesheet">
</head>

<main>
    <div class="wrapper">
        @include('includes.nav')

        <div class="content">
            <div class="card">
                <h1 class="">Start your own business!</h1>
                <span class="">Start your career with hosting</span>
                <div class="button">
                    <a class="" href="#">Get started</a>
                </div>
            </div>
            <div class="info-container">
                <div class="content-container">
                    <div class="content-data">
                        <i class="fa-solid fa-car-burst"></i>
                        <p>Insurance</p>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Architecto error consequuntur consequatur quos ab possimus sed fugit minus.
                            Ratione fuga molestias,
                            accusamus possimus odit rerum veritatis tempore incidunt optio dicta.</p>
                    </div>
                    <div class="content-data">
                        <i class="fa-solid fa-headset"></i>
                        <p>Support</p>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Architecto error consequuntur consequatur quos ab possimus sed fugit minus.
                            Ratione fuga molestias,
                            accusamus possimus odit rerum veritatis tempore incidunt optio dicta.</p>
                    </div>
                    <div class="content-data">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <p>Earn money</p>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Architecto error consequuntur consequatur quos ab possimus sed fugit minus.
                            Ratione fuga molestias,
                            accusamus possimus odit rerum veritatis tempore incidunt optio dicta.</p>
                    </div>
                    <div class="content-data">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <p>Application</p>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Architecto error consequuntur consequatur quos ab possimus sed fugit minus.
                            Ratione fuga molestias,
                            accusamus possimus odit rerum veritatis tempore incidunt optio dicta.</p>
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


        </div>

        @include('includes.footer')
    </div>
</main>

</html>