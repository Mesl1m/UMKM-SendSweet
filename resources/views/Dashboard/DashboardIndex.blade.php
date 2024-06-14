<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SendSweet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(#FF7CBB, #FA89C0, #DDDDDD);
    }

    .wrapper {
        width: 100%;
        height: 100vh; 
    }
    /* .card{ */
        /* background-color: #E211B4; */
        /* height: 78px;
        margin: 50px;
        border-radius: 50px; */
    /* } */
    .content{
        margin-left: 60px;
    }
</style>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="upNavbar">
                <div class="container" style="width: 800px">
                    <div class="sub-menu mt-2 d-flex justify-content-between gap-4">
                        <button id="homeBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Home</button>
                        <button id="catalogBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Catalog</button>
                        <button id="contactUs" type="button" style="color: white" class="btn btn-outline-none fw-bold">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="navBar d-flex justify-content-center">
                        <div id="companyName" class="text-center">
                            <h1 class="mb-0 pb-0" style="font-family: 'Passion One'; font-weight: bold; color: #ED3080;">SendSweet</h1>
                            <label class="m-0 p-0" style="font-family: 'Pinyon Script', cursive; font-weight: bold;">Your Dessert Choice</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center mt-5">
                <div class="col-sm-6">
                    <h1 style="color: white; font-family:'Luckiest Guy';">WELCOME SWEETIES !!</h1>
                    <p style="color: white; font-family: 'itim'; font-size: 25px; font-weight: bold;">We Have many Flavors of Cake and Cookies, You can see our menu in the Shop Menu or you can click the button below.</p>
                    <div style="display: flex; justify-content: center;">
                        <button class="btn btn-outline-none" id="buttonCatalog" type="button" style="color: white; background-color: #ED3080; margin-top: 12px; padding: 10px 20px; font-size: 18px;">Click Me</button>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="d-block w-100" style="border-radius: 50px;" src="{{asset('img/cake-Box.jpg')}}" alt="First slide">
                              <div class="carousel-caption d-none d-md-block">
                                  <h5 class="fw-bold fs-2" style="color: black;">Cake Box</h5>
                                  <p></p>
                              </div>
                            </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="border-radius: 50px;" src="{{asset('img/brownies-Cookies.jpg')}}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-2" style="color: black;">Brownies Cookies</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="border-radius: 50px;" src="{{asset('img/cookies.jpg')}}" alt="third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="fw-bold fs-2" style="color: black;">Soft Baked Cookies</h5>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 2000
        })
    });

    $(document).ready(function () {
        $('#buttonCatalog').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('catalogSendsweet')}}'
        })
    });

    $(document).ready(function () {
        $('#catalogBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('catalogSendsweet')}}'
        })
    });

    $(document).ready(function () {
        $('#homeBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('index')}}'
        })
    });

    $(document).ready(function () {
        $('#contactUs').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('contactUS')}}'
        })
    });

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "{{route ('showAll') }}",
            dataType: "JSON",
            success: function (response) {
                
            }
        });
    });
    
</script>