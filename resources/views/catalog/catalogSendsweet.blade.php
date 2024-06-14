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
        background: linear-gradient(#f777ad, #c8baba);
        height: 100vh;
        min-height: 100vh;
        width: 100%;
    }

    .wrapper {
        min-width: 100%;
        width: 100%;
        height: 100%;
        min-height: 100%; 
    }

    h1{
        color: #ED3080; 
        font-family:'Luckiest Guy'; 
        font-weight: bold; 
        font-size: 50px;
    }

    .type{
        display: flex;
        justify-content: center;
        font-family: 'Passion One'; 
        font-size: 50px; 
        font-weight: bold; 
        color: #ED3080;
    }
</style>
<body>
    <div class="wrapper">
        <div class="aligns-item-center">
            <div class="upNavbar">
                <div class="container" style="width: 800px">
                    <div class="sub-menu mt-2 d-flex justify-content-between gap-4">
                        <button id="homeBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Home</button>
                        <button id="catalogBtn" type="button" style="color: white" class="btn btn-outline-none fw-bold">Catalog</button>
                        <button id="contactUs" type="button" style="color: white" class="btn btn-outline-none fw-bold">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="navBar d-flex justify-content-center">
                        <div id="companyName" class="text-center">
                            <h1 class="mb-0 pb-0" style="font-family: 'Passion One'; font-weight: bold; color: #ED3080;">SendSweet</h1>
                            <label class="m-0 p-0" style="font-family: 'Pinyon Script', cursive; font-weight: bold;">Your Dessert Choice</label>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-none rounded-pill px-3 mx-2 d-none" id="buttonBack" type="button" style="color: white;background-color: #ED3080; font-size: 18px;">
                <img src="{{asset('icons/arrow.svg')}}" alt=""> Back
            <button class="btn btn-outline-none rounded-pill px-3 mx-2 d-none" id="buttonBackCookies" type="button" style="color: white;background-color: #ED3080; font-size: 18px;">
                <img src="{{asset('icons/arrow.svg')}}" alt=""> Back
            </button>
            <button class="btn btn-outline-none rounded-pill px-3 mx-2 float-end d-none" id="buttonNextCookies" type="button" style="color: white;background-color: #ED3080; font-size: 18px;">
                Next <img src="{{asset('icons/next.svg')}}" alt=""> 
            </button>
            <div class="container d-flex justify-content-center my-3" id="ourMenuTitle">
                <h1 style="color: white">Our Menu</h1>
            </div>
            <div class="container d-none" id="browniesTitle">
                <h1 class="text-center" style="color: white">Brownies</h1>
                <h5 class="text-center fw-bolder">Homemade brownies yang sangat lezat dan manis, tersedia dua varian rasa</h5>
            </div>
            <div class="container d-none" id="desseertBoxTitle">
                <h1 class="text-center" style="color: white">Dessert Box</h1>
                <h5 class="text-center fw-bolder">Homemade Dessert box yang sangat lezat dan manis, tersedia dua varian rasa</h5>
            </div>
            <div class="container d-none" id="cookiesTitle">
                <h1 class="text-center" style="color: white">Cookies</h1>
                <h5 class="text-center fw-bolder">Homemade cookies yang sangat lezat dan manis, tersedia enam varian rasa</h5>
            </div>
        </div>
        
        {{-- menu --}}
        <div class="container d-flex justify-content-between gap-5" id="menuList">
            <div class="card" style="width: 100%; background-color: #FFC3E0;">
                <h3 class="type">Dessert Box</h5>
                <img src="{{asset('img/cake-Box.jpg')}}" class="card-img-top" alt="...">
                <button class="btn btn-outline-none rounded-0" id="btnDessertBox" style="background-color: #ED3080; color: white;">Show More</button>
            </div>
            <div class="card" style="width: 100%; background-color: #FFC3E0;">
                <h3 class="type">Brownies</h5>
                <img src="{{asset('img/brownies-Cookies.jpg')}}" class="card-img-top" alt="...">
                <button class="btn btn-outline-none rounded-0" id="btnBrownies" style="background-color: #ED3080; color: white;">Show More</button>
            </div>
            <div class="card" style="width: 100%; background-color: #FFC3E0;">
                <h3 class="type">Cookies</h3>
                <img src="{{asset('img/cookies.jpg')}}" class="card-img-top" alt="...">
                <button class="btn btn-outline-none rounded-0" id="btnCookies" style="background-color: #ED3080; color: white;">Show More</button>
            </div>
        </div>

        {{-- sectionn brownies menu --}}
        <div id="sectionBrowniesMenu" class="container d-flex justify-content-center gap-5 d-none">
            {{-- <div style="width: 30%;">
                <img src="{{asset('img/originalBrownies.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus' ;color: #FF006B">Original</h2>
                <p class="text-center p-0 m-0">“Brownies rasa original”</p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus' ;color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 30%;">
                <img src="{{asset('img/tripleChoco.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family: 'Artubus' ;color: #FF006B">Triple Choco</h2>
                <p class="text-center p-0 m-0">“Brownies dengan sensasi tiga kali lipat dari coklat”</p>
                <h2 class="text-center fw-bold" style="font-family: 'Artubus' ;color: #FF006B">Rp 40.000/box </h2>
            </div> --}}
        </div>

        {{-- sectionn Dessert Box menu --}}
        <div id="sectionDesertMenu" class="container d-flex justify-content-center gap-5 d-none">
            {{-- <div style="width: 30%;">
                <img src="{{asset('img/thaiTea.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus' ;color: #FF006B">Thai Tea</h2>
                <p class="text-center p-0 m-0">“Dessert box dengan manis nya Thai tea”</p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus' ;color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 30%;">
                <img src="{{asset('img/sweetApple.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family: 'Artubus' ;color: #FF006B">Sweet Apple</h2>
                <p class="text-center p-0 m-0">“Dessert box dengan sensasi manis nya buah apel”</p>
                <h2 class="text-center fw-bold" style="font-family: 'Artubus' ;color: #FF006B">Rp 40.000/box </h2>
            </div> --}}
        </div>

        {{-- sectionn cookies menu --}}
        <div id="sectionCookiesMenu1" class="container d-flex justify-content-center gap-5 d-none">
            {{-- <div style="width: 25%;">
                <img src="{{asset('img/classic.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Classic</h2>
                <p class="text-center p-0 m-0">“Dessert box dengan manis nya Thai tea”</p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 25%;">
                <img src="{{asset('img/darkChoco.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Dark Choco Chunks</h2>
                <p class="text-center p-0 m-0">“Dessert box dengan manis nya Thai tea”</p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 25%;">
                <img src="{{asset('img/saltedCaramel.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family: 'Artubus';color: #FF006B">Salted Caramel Filling</h2>
                <p class="text-center p-0 m-0">“Dessert box dengan sensasi manis nya buah apel”</p>
                <h2 class="text-center fw-bold" style="font-family: 'Artubus';color: #FF006B">Rp 40.000/box </h2>
            </div> --}}
        </div>
        <div id="sectionCookiesMenu2" class="container d-flex justify-content-center gap-5 d-none">
            {{-- <div style="width: 25%;">
                <img src="{{asset('img/matcha.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Matcha</h2>
                <p class="text-center p-0 m-0">“Cookies dengan perpaduan rasa matcha dan coklat putih”</p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 25%;">
                <img src="{{asset('img/chocoSmores.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Choco S’mores</h2>
                <p class="text-center p-0 m-0">“Cookies rasa coklat dengan topping marshmellow” </p>
                <h2 class="text-center fw-bold" style="font-family:'Artubus';color: #FF006B">Rp 40.000/box</h2>
            </div>
            <div style="width: 25%;">
                <img src="{{asset('img/blackTreasure.png')}}" class="card-img-top" alt="...">
                <h2 class="text-center fw-bold" style="font-family: 'Artubus';color: #FF006B">Black Treasure</h2>
                <p class="text-center p-0 m-0">“Cookies rasa coklat dengan filling caramel”</p>
                <h2 class="text-center fw-bold" style="font-family: 'Artubus';color: #FF006B">Rp 40.000/box </h2>
            </div> --}}
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // dessert
        $(document).on('click', '#btnDessertBox', function (e) {
            $("#sectionDesertMenu").removeClass('d-none')
            $("#desseertBoxTitle").removeClass('d-none')
            $("#buttonBack").removeClass('d-none')
            $("#menuList").addClass('d-none')
            $("#ourMenuTitle").addClass('d-none')
            $("#sectionCookiesMenu1").addClass('d-none')
            $("#sectionCookiesMenu2").addClass('d-none')
            $("#cookiesTitle").addClass('d-none')
            $("#sectionBrowniesMenu").addClass('d-none')
            $("#browniesTitle").addClass('d-none')
            $("#buttonNextCookies").addClass('d-none')
            $("#buttonBackCookies").addClass('d-none')

            function showDessertBox() {
                const loadSpin =
                `<div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                </div> `;

                $.ajax({
                    url: `{{ route("showDessertBox") }}`,
                    method: 'GET',
                    beforeSend:function(){
                        $('#sectionDesertMenu').html(loadSpin);
                    }
                }).done(res => {
                    $('#sectionDesertMenu').html(res);
                })
            }
            showDessertBox()
        });
        // cookies 1
        $(document).on('click', '#btnCookies', function (e) {
            $("#sectionCookiesMenu1").removeClass('d-none')
            $("#cookiesTitle").removeClass('d-none')
            $("#buttonNextCookies").removeClass('d-none')
            $("#buttonBack").removeClass('d-none')
            $("#sectionCookiesMenu2").addClass('d-none')
            $("#sectionDesertMenu").addClass('d-none')
            $("#desseertBoxTitle").addClass('d-none')
            $("#menuList").addClass('d-none')
            $("#ourMenuTitle").addClass('d-none')
            $("#sectionBrowniesMenu").addClass('d-none')
            $("#browniesTitle").addClass('d-none')
            $("#buttonBackCookies").addClass('d-none')

            function showCookies() {
                const loadSpin =
                `<div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                </div> `;

                $.ajax({
                    url: `{{ route("showCookies") }}`,
                    method: 'GET',
                    beforeSend:function(){
                        $('#sectionCookiesMenu1').html(loadSpin);
                    }
                }).done(res => {
                    $('#sectionCookiesMenu1').html(res);
                })
            }
            showCookies()
        });

        // cookies 2
        $(document).on('click', '#buttonNextCookies', function (e) {
            $("#sectionCookiesMenu2").removeClass('d-none')
            $("#cookiesTitle").removeClass('d-none')
            $("#buttonBackCookies").removeClass('d-none')
            $("#sectionCookiesMenu1").addClass('d-none')
            $("#sectionDesertMenu").addClass('d-none')
            $("#desseertBoxTitle").addClass('d-none')
            $("#menuList").addClass('d-none')
            $("#ourMenuTitle").addClass('d-none')
            $("#sectionBrowniesMenu").addClass('d-none')
            $("#browniesTitle").addClass('d-none')
            $("#buttonNextCookies").addClass('d-none')
            $("#buttonBack").addClass('d-none')

            function showCookies2() {
                const loadSpin =
                `<div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
                </div> `;

                $.ajax({
                    url: `{{ route("showCookies2") }}`,
                    method: 'GET',
                    beforeSend:function(){
                        $('#sectionCookiesMenu2').html(loadSpin);
                    }
                }).done(res => {
                    $('#sectionCookiesMenu2').html(res);
                })
            }
            showCookies2()
        });

        $(document).on('click', '#btnBrownies', function (e) {
            $("#sectionBrowniesMenu").removeClass('d-none')
            $("#browniesTitle").removeClass('d-none')
            $("#buttonBack").removeClass('d-none')
            $("#sectionCookiesMenu1").addClass('d-none')
            $("#sectionCookiesMenu2").addClass('d-none')
            $("#cookiesTitle").addClass('d-none')
            $("#sectionDesertMenu").addClass('d-none')
            $("#desseertBoxTitle").addClass('d-none')
            $("#menuList").addClass('d-none')
            $("#ourMenuTitle").addClass('d-none')
            $("#buttonNextCookies").addClass('d-none')
            $("#buttonBackCookies").addClass('d-none')
        });

        function showBrownies() {
            const loadSpin =
            `<div class="d-flex justify-content-center align-items-center mt-5">
                <div class="spinner-border d-flex justify-content-center align-items-center text-danger" role="status"><span class="visually-hidden">Loading...</span></div>
            </div> `;

            $.ajax({
                url: `{{ route("showBrownies") }}`,
                method: 'GET',
                beforeSend:function(){
                    $('#sectionBrowniesMenu').html(loadSpin);
                }
            }).done(res => {
                $('#sectionBrowniesMenu').html(res);
            })
        }
        showBrownies()
    });

    $(document).ready(function () {
        $('#buttonBack').on('click', function(e) {
            $("#menuList").removeClass('d-none')
            $("#ourMenuTitle").removeClass('d-none')
            $("#sectionDesertMenu").addClass('d-none')
            $("#sectionCookiesMenu1").addClass('d-none')
            $("#sectionCookiesMenu2").addClass('d-none')
            $("#sectionBrowniesMenu").addClass('d-none')
            $("#desseertBoxTitle").addClass('d-none')
            $("#cookiesTitle").addClass('d-none')
            $("#browniesTitle").addClass('d-none')
            $("#buttonBackCookies").addClass('d-none')
            $("#buttonBack").addClass('d-none')
            $("#buttonNextCookies").addClass('d-none')
        })
    });

    $(document).ready(function () {
        $("#buttonBackCookies").on('click', function(e) {
            $("#sectionCookiesMenu1").removeClass('d-none')
            $("#buttonBack").removeClass('d-none')
            $("#buttonNextCookies").removeClass('d-none')
            $("#sectionCookiesMenu2").addClass('d-none')
            $("#buttonBackCookies").addClass('d-none')
        })
    });

    $(document).ready(function () {
        $('#homeBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('index')}}'
        })
    });
    
    $(document).ready(function () {
        $('#catalogBtn').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('catalogSendsweet')}}'
        })
    });

    $(document).ready(function () {
        $('#contactUs').on('click', function(e){
            e.preventDefault();
            window.location.href = '{{route('contactUS')}}'
        })
    });
    
</script>