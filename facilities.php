<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIDA HOTEL - FACILITIES</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="CSS/common.css">
    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            We offer a wide range of facilities to ensure your stay is comfortable and enjoyable.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/wifi--v1.png" alt="wifi--v1"/>
                        <h5 class="m-0 ms-3">Wifi</h5>
                        
                    </div>
                    <p>
                        Enjoy complimentary high-speed Wi-Fi throughout the hotel, ensuring you stay connected during your visit.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img width="50" height="50" src="https://img.icons8.com/fluency/48/tv.png" alt="tv"/>
                        <h5 class="m-0 ms-3">Smart TV</h5>
                        
                    </div>
                    <p>
                        Each room is equipped with a flat-screen TV offering a variety of channels for your entertainment.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/food-and-wine.png" alt="food-and-wine"/>
                        <h5 class="m-0 ms-3">Drinks & Cakes</h5>
                        
                    </div>
                    <p>
                        Complimentary bottled water is provided in each room, ensuring you stay hydrated throughout your stay.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/air-conditioner.png" alt="air-conditioner"/>
                        <h5 class="m-0 ms-3">Air Condition</h5>
                        
                    </div>
                    <p>
                        Each room is equipped with air conditioning to ensure a comfortable temperature during your stay.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/fork-knife.svg" width="45px" alt="">
                        <h5 class="m-0 ms-3">Restaurant</h5></h5>
                        
                    </div>
                    <p>
                        Our on-site restaurant offers a variety of cuisines to satisfy your culinary cravings.
                        Enjoy a delightful dining experience with a menu that caters to all tastes.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img width="48" height="48" src="https://img.icons8.com/ios-glyphs/30/clothes-in-laundry.png" alt="clothes-in-laundry"/>
                        <h5 class="m-0 ms-3">Clothes in Laundry</h5>
                    </div>
                    <p>
                        We offer laundry services to keep your clothes fresh and clean during your stay. Please inquire at the front desk for details.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <?php require('inc/footer.php'); ?>
</body>

</html>