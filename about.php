<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIDA HOTEL - ABOUT   </title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/common.css">
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Welcome to TIDA Hotel, where luxury meets comfort. <br> 
            Our hotel is designed to provide you with an unforgettable experience, whether you're here for business or leisure. <br>
            With our state-of-the-art facilities, exceptional service, and prime location, we ensure that your stay is nothing short of perfect.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 mb-3>
                    Our Mission
                </h3>
                <p>
                    At TIDA Hotel, our mission is to provide exceptional hospitality and create memorable experiences for our guests. We strive to exceed expectations through personalized service, luxurious accommodations, and a commitment to excellence in everything we do.

                </p>
                <p>
                    Our team is dedicated to ensuring that every aspect of your stay is perfect, from the moment you arrive until the time you depart. We believe in creating a welcoming and comfortable environment where you can relax and enjoy your time with us.
                </p>
                <p>
                    Whether you're here for a business trip, a family vacation, or a romantic getaway, TIDA Hotel is your home away from home. We look forward to welcoming you and providing you with an unforgettable experience.
                </p>
                <p>
                    Thank you for choosing TIDA Hotel. We are excited to have you as our guest and are committed to making your stay exceptional.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/myself.png" class="w-100 h-80 rounded shadow" alt="About Us Image">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img width="70" height="70" src="https://img.icons8.com/color/48/conference-skin-type-7.png" alt="conference-skin-type-7"/>
                    <h4 class="mt-3">
                        100+ CUSTOMERS
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img width="70px" height="70px" src="https://img.icons8.com/emoji/48/hotel-emoji.png" alt="hotel-emoji"/>
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img width="70" height="70" src="https://img.icons8.com/nolan/50/popular-topic.png" alt="popular-topic"/>
                    <h4 class="mt-3">
                        150+ REVIEWS
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">

                    <img width="70" height="70" src="https://img.icons8.com/color/48/staff.png" alt="staff"/>
                    <h4 class="mt-3">
                        100+ STAFFS
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">
        MANAGEMENT TEAM
    </h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/myself.png" class="w-30" alt="">
                    <h5 class="mt-2" >TINH DANG</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/myself.png" class="w-30" alt="">
                    <h5 class="mt-2" >TINH DANG</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/myself.png" class="w-30" alt="">
                    <h5 class="mt-2" >TINH DANG</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded shadow">
                    <img src="images/about/myself.png" class="w-30" alt="">
                    <h5 class="mt-2" >TINH DANG</h5>
                </div>
            </div>
        
            <div class="swiper-pagination"></div>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesperView: 4,
        spaceBetween: 40,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
        });
  </script>    


    <?php require('inc/footer.php'); ?>
</body>

</html>